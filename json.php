<style>

</style>



<!DOCTYPE html>
<html>
<head>
    <title>
    </title>
</head>
<body>
    <p id="jsontest"></p>
    
    <p id="percentages">Hier komen de percentages jongens en meisjes</p>
    
    <button id="btn">Klik op mij en er wordt data binnengehaald (asynchroon)</button>
</body>
</html>


<script>
    //alert("Javascript werkt!");
    
    document.getElementById('btn').onclick = function(){
        //alert("Dit is een test");
        
        var xmlhttp = new XMLHttpRequest();
        
        xmlhttp.onreadystatechange = function()
        {
          
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                obj = JSON.parse(xmlhttp.responseText);
                
                document.getElementById('percentages').innerHTML = obj.aantaljongens + " " + obj.aantalmeisjes;   
            }       
        }
        xmlhttp.open("POST", "http://localhost/2014-2015/canvas/bereken.php", true);
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xmlhttp.send("id1=147&id2=150");
        
    }

    
    var testJSONString = '{ "voornaam" : "Arjan", "tussenvoegsel" : "de", "achternaam" : "Ruijter"}';

    var testJSobj = JSON.parse(testJSONString);

    document.getElementById('jsontest').innerHTML = "Hier staat de tekst uit het JSON-object: " + testJSobj.voornaam + " " + testJSobj.tussenvoegsel + " " + testJSobj.achternaam;
    
</script>