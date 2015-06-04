<style>

</style>



<!DOCTYPE html>
<html>
<head>
    <title>
    </title>
</head>
<body>
    <p id="testpArray"></p>
    <p id="testp2Array"></p>
<hr>   
    <p id="testpObject"></p>
    <p id="testpObject2"></p>
    
    
</body>
</html>


<script>
    //alert("Javascript werkt!");
    //Hoe ziet een javascript array eruit
    
    var testVariabele = "bananen";
    
    var testArray = [ "bananen",
                      "appels",
                      "sinaasappels",
                      "bosbessen"];
    testArray.push("kruisbessen");
    testArray[5] = "aardbeien";
    document.getElementById("testpArray").innerHTML = "Roy houdt erg van hele grote " + testArray[5] + "<br>De lengte van het array is: " + testArray.length;
    
    var elementen = "";
    for (var i = 0; i < testArray.length; i++)
    {
        elementen += testArray[i] + "<br>";
    }
    document.getElementById("testp2Array").innerHTML = "De volgenden elementen zitten in testArray: <br>" + elementen;
    
    // Hoe zit het met javascript objecten
    
    
    var auto = "Fiat";
    
    var voertuig = { merk : "Fiat",
                     motorInhoud : "5000CC",
                     aantalDeuren : "5", 
                     topsnelheid : "250km/h",
                     beschikbareKleuren : ["rood", "geel", "groen"],
                     benzineVerbruik : "4L/100km",
                     reclameTekst : function(){
                         var alleKleuren = "";
                         for (var i = 0; i < this.beschikbareKleuren.length; i++)
                         {
                             alleKleuren += this.beschikbareKleuren[i] + ", ";
                         }
                         return "De " + this.merk + " is met zijn " + this.motorInhoud + " motorinhoud de snelste auto in het asortiment. Zijn topsnelheid ligt op " + this.topsnelheid + " en toch is hij de zuinigste in zijn segment met " + this.benzineVerbruik + ". Hij is nu verkrijgbaar in de kleuren: " + alleKleuren;  
                     }
                   }
    
    document.getElementById("testpObject").innerHTML =      voertuig.merk + " | " + voertuig.motorInhoud + " | " + voertuig.aantalDeuren + " | " + voertuig.topsnelheid + " | " + voertuig.beschikbareKleuren[2];
    
    document.getElementById("testpObject2").innerHTML = voertuig.reclameTekst();
    
    
    
</script>