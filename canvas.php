<style>
#canv1
{
    border: 1px solid grey;
    background-color: rgba(253, 164, 0, 0.73);
    width: 640px;
    height: 480px;
    margin: 20px auto;
}

#canv2
{
    border: 1px solid grey;
    background-color: rgba(106, 216, 92, 0.73);
    width: 640px;
    height: 80px;
    margin: 20px auto;
}
</style>



<!DOCTYPE html>
<html>
<head>
    <title>
    </title>
</head>
<body>
    <canvas id="canv1">Dit is het canvas element, zie je mij ja of nee?</canvas>
    
<!--    <canvas id="canv2">Dit is het canvas element, zie je mij ja of nee?</canvas> -->

</body>
</html>


<script>
    //alert("Javascript werkt!");
    var canvas1 = document.getElementById("canv1");
    
    canvas1.width = 640;
    canvas1.height = 480;
    
    
    var ctx = canvas1.getContext("2d");
    
    var xOffset = 20;
    var value1 = 100;
    ctx.fillStyle = "#1d00fd";
    ctx.fillRect(40  , canvas1.height - value1 - 20, 10, value1);
    
    var value2 = 60;
    ctx.fillStyle = "grey";
    ctx.fillRect(40 + xOffset  , canvas1.height - value2 - 20, 10, value2);
    
    var value3 = 40;
    ctx.fillStyle ="#1d00fd";
    ctx.fillRect(40 + 2 * xOffset  , canvas1.height - value3 - 20, 10, value3);
    
    var value4 = 20;
    ctx.fillStyle ="grey";
    ctx.fillRect(40 + 3 * xOffset  , canvas1.height - value4 - 20, 10, value4);
    
    
    ctx.moveTo(20, canvas1.height - 20);
    ctx.lineTo(20, canvas1.height - 130);
    ctx.moveTo(20, canvas1.height - 20);
    ctx.lineTo(200, canvas1.height - 20);
    ctx.strokeStyle = "#FFFFFF";
    ctx.lineWidth = 1;    
    ctx.stroke();
    
    ctx.beginPath();    
    ctx.arc(150,120, 100, 0 * Math.PI, 0.7 * Math.PI);
    ctx.fillStyle = "#FFFFFF";
    ctx.fill();
    ctx.strokeStyle = "#000000";
    ctx.lineWidth = 2;
    ctx.stroke();
    
    ctx.beginPath();    
    ctx.arc(150,120, 100, 0.7 * Math.PI, 2 * Math.PI);
    ctx.fillStyle = "#4e3fbc";
    ctx.fill();
    ctx.strokeStyle = "#000000";
    ctx.lineWidth = 0.9;
    ctx.stroke();
    
    // Border1 mag niet kleiner zijn dan - Math.PI/2
    var border1 = 0.5;
    
    // Border@ mag niet groter zijn dan 3 * Math.PI/2
    var border2 = 0.5;
    
    var centerX = 500;
    var centerY = 200;
    var radius = 100;
    
    ctx.beginPath();
    ctx.moveTo(centerX, centerY);
    ctx.arc(centerX, centerY, radius, -Math.PI/2,  border1 * Math.PI );
    ctx.fillStyle = "white";
    ctx.fill();
    ctx.lineTo(centerX, centerY);
    ctx.stroke(); // or context.fill()
    
    ctx.beginPath();
    ctx.moveTo(centerX,centerY);
    ctx.arc(centerX, centerY, radius,border1 * Math.PI, border2 * Math.PI );
    ctx.fillStyle = "red";
    ctx.fill();
    ctx.lineTo(centerX, centerY);
    ctx.stroke(); // or context.fill()
    
    ctx.beginPath();
    ctx.moveTo(centerX, centerY);
    ctx.arc(centerX, centerY, radius, border2 * Math.PI, 3/2 * Math.PI);
    ctx.fillStyle = "blue";
    ctx.fill();
    ctx.lineTo(centerX, centerY);
    ctx.stroke(); // or context.fill()   
    
    
    
    ctx.font = "30px Verdana";
    ctx.fillStyle = "#FFFFFF";
    ctx.textAlign = "center";
    ctx.fillText("Hallo Wereld!", canvas1.width/2, canvas1.height/2);
    
    
    
</script>