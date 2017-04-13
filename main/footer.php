</div>
</body>
<script>
    var definitive = [];
    function addInArray(val) {
        input_value = (val.split(" ")).length == 1 ? val : val.split(" ");

        if (typeof input_value == 'string') {
            if (Number(input_value)) {
                definitive.push(Number(input_value));
            }
        } else if (typeof input_value == 'object') {
            input_value.forEach(function (element) {
                if (Number(element)) {
                    definitive.push(Number(element));
                }
            });
        }
        document.getElementById("input").value = "";
        var div = document.getElementById('finish');
        div.innerHTML = definitive;
    }

    function myFunction() {

        var min = Math.min.apply(null, definitive),
            max = Math.max.apply(null, definitive);
        result = definitive.indexOf(max - min);
        if (result == -1) {
            alert('Oops : false');
        } else {
            alert('Congrats : true');
        }
        location.reload();
    }

    function getSecondMax() {

        var max = definitive[0];
        var sec = definitive[0];

        for (var i = 1; i < definitive.length; i++) {
            if (definitive[i] > max) {
                sec = max;
                max = definitive[i];
            }
            if (definitive[i] > sec && definitive[i] < max) {
                sec = definitive[i];
                index_sec = i;

            }
        }
        alert(index_sec);
        location.reload();
    }

    function repeatCoun(amount, repeat) {
        if (amount < definitive.length) {
            for (var i = 0; i < repeat; i++) {
                for (var j = 0; j < 2; j++) {
                    definitive.push(definitive[definitive.length - amount]);
                    definitive.unshift(definitive[amount - 1])
                }
            }

            alert(definitive);
        } else {
            alert('Invalid padding amount');
        }
        location.reload();
    }

    function validation(input_val) {
        var check ={};
        var count = 0;
        if (input_val.length > 5 && input_val.length < 17) {
            for (var i = 0; i < input_val.length; i++) {
                if( 'a' <= input_val[i] && 'z' >= input_val[i] ){
                    check.v = 'ok';
                }
                if( 'A' <= input_val[i] && 'Z' >= input_val[i] ){
                    check.k = 'ok';
                }
                if( input_val[i] == '$' || input_val[i] == '#' || input_val[i] == '@' ){
                    check.m = 'ok';
                }
            }
        }

        if(Object.keys(check).length == 3){
            alert('congrats');
            check ={};
        }else{
            alert('error!');
            check ={};
        }
    }
// six
    function loop( val ) {
        if(val){
            var $arr = [];
            var matrix = [];
            var count = parseInt(val)+ 5 ;
            for(var i = 0; i <= count; i++){
                for(var j = 0; j <= count; j++){
                    if( i==j || j==(count-i)){
                        $arr[j] = '*';
                    }else {
                        $arr[j] = '&nbsp;';
                    }
                }
                matrix[i]=$arr+'<br>';
                $arr = [];

            }
            $('#message').append(matrix);
        }else{
            alert('please enter number')
        }

    }
    
    
    //seven
    
    function seven( val ) {
        var arr = [];
        var str = '';

        for(var i=0; i < val.length ; i++){
            if(val[i] == ' '){
                arr.push(str);
                str = '';
                continue
            }

            str += val[i];
           if(i==val.length-1){
                arr.push(str);
            }
        }
       console.log(arr);
    }
    
    function eight() {
        var arr = definitive;
        var count=1;
        var finish = [];
       for(var i = 0 ; i  <arr.length; i++){
           for(var j =i+1  ; j < arr.length; j++){
               if(arr[i]==arr[j] && arr[i]!=''){
                  arr[j]='';
                   count++;
               }

           }
           if(arr[i]!='' && count==1){
               finish.push(arr[i]+':'+ (count/arr.length))
           }
           if(count !=1){
               finish.push(arr[i]+':'+ (count/arr.length))
           }

           count =1;
       }
        alert(finish);
    }
    function nine( val ) {
        var arr = [];
        var str ='';
        var length  = 2*val;
        for (var i=1 ; i < length  ; i++){
            for (var j = 1 ; j <= val ; j++ ){
                str+= j;

                if(i == val-1 && j == val-1){
                    arr[i] = str + '<br>' ;
                    arr[i]+= str + val + '<br>' ;
                    str = '';
                    break;
                }
                if( i == j || i== length-1-j ){

                    arr[i] = str + '<br>' ;
                    str = '';
                    break;


                }

            }
        }
        $('#message').append(arr);
    }

    function then() {
        var arr = [ 1, '10', 'hi', 2, 3 ];
        var string = 0;
        var number = 0;
        for(var  i = 0 ; i < arr.length; i++){
            if(typeof arr[i] == "string" ){
                string++
            }
            if(typeof arr[i] == 'number'){
                number++
            }
        }
        str = 'string : '+ string + ',' + 'number : '+ number;
        alert(str);
    }
    
    function one() {
        var arr = definitive;
        var finish = [];
        var step = (arr[1] - arr[0]) / ( arr[2] - 1 ) ;
        var min = arr[0];
        var max = arr[1];
        var count=0;
        for( var i = min ; i <= max ; i=i+step){
            finish[count]= i ;
            count++;
        }
        console.log(finish);
        definitive = [];
    }
</script>
</html>