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

        for(var i = 1; i < definitive.length ; i++){
            if(definitive[i] > max){
                sec = max;
                max = definitive[i];
            }
            if(definitive[i] > sec && definitive[i] < max){
                sec = definitive[i];
                index_sec = i;

            }
        }
        alert(index_sec);
        location.reload();
    }
    
    function repeatCoun( amount , repeat ) {
        if(amount < definitive.length){
            for(var i=0 ; i< repeat ; i++ ){
                for(var j=0 ; j< 2 ; j++){
                    definitive.push(definitive[definitive.length - amount]);
                    definitive.unshift(definitive[amount-1])
                }
            }

            alert(definitive);
        }else {
            alert('Invalid padding amount');
        }
        location.reload();


    }
</script>
</html>