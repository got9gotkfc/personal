<canvas id="myCanvas"></canvas>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>



var canvas=document.getElementById("myCanvas")
var ctx=canvas.getContext("2d")
var time=0
var move=0
function initCanvas(){
ww = canvas.width=$('body').width()
wh = canvas.height=$('body').height()+500
}

function madestar(x,y,size,big,hz,r,g,b,a){

 let color='rgba('+r+','+g+','+b+','+a+')'
 ctx.beginPath()
 ctx.shadowOffsetX = 0;
 ctx.shadowOffsetY = 0;
 ctx.shadowBlur="10"
 ctx.shadowColor="white"
 if(big%hz<hz/2){
 ctx.moveTo(x,y+size)
 ctx.quadraticCurveTo(x,y,x+size,y)
 ctx.quadraticCurveTo(x,y,x,y-size) 
 ctx.quadraticCurveTo(x,y,x-size,y)
 ctx.quadraticCurveTo(x,y,x,y+size)
 }else{
 ctx.moveTo(x,y+size+3)
 ctx.quadraticCurveTo(x,y,x+size+3,y)
 ctx.quadraticCurveTo(x,y,x,y-size-3) 
 ctx.quadraticCurveTo(x,y,x-size-3,y)
 ctx.quadraticCurveTo(x,y,x,y+size+3)
 }
 ctx.fillStyle=color
 ctx.fill()
 ctx.strokeStyle=color
 ctx.stroke()
}

function mademeteor(x,y,long,spd){
ctx.beginPath()
ctx.moveTo(x,y)
ctx.lineTo(x+spd,y+spd)
ctx.strokeStyle="rgba(255,255,255,0.8)"
ctx.stroke()
ctx.closePath()
ctx.beginPath()
ctx.moveTo(x-long,y-long)
ctx.lineTo(x-long+spd,y-long+spd)
ctx.lineWidth=2
ctx.strokeStyle="rgba(0,0,0,1)" 
ctx.stroke()
}

initCanvas()
class star{
constructor(args){
  let def = {
    size: 10,
    x: 0,
    hz: 90,
    y: 0,
    a:1
  }
  Object.assign(def,args)
  Object.assign(this,def)
}
draw(){
 
  madestar(this.x,this.y,this.size,time,this.hz,255,255,255,this.a)
  this.a=this.a-0.005//控制它慢慢消失
 
}
}
class meteor{
constructor(args){
  let def = {
    x: ww*Math.random(),
    y: wh*Math.random(),
    long:100*Math.random()+50,
    spd:1
  }
  Object.assign(def,args)
  Object.assign(this,def)
}
draw(){
  mademeteor(this.x,this.y,this.long,this.spd)
  this.spd=this.spd+10
 
}
}

var stars=[]
var meteors=[]
function draw(){

ctx.fillRect(0,0,ww,wh)
ctx.save()
ctx.translate(ww/2,wh/2)
ctx.beginPath()
ctx.shadowBlur="10"
ctx.shadowColor="white"
ctx.arc(3*ww/8,3*(-wh/8),ww/16,0,2*Math.PI)
ctx.fillStyle="rgba(255,255,255,1)"
ctx.fill()
ctx.strokeStyle="rgba(255,255,255,1)"
ctx.stroke()
ctx.restore()



ctx.save()
//將陣列的星星拿出
  stars.forEach(star=>{
    star.draw()
  })
time++
ctx.restore()
ctx.save()
ctx.translate(ww/2,wh/2)
madestar(1,0,4,4,90,255,255,255,1)
ctx.restore()

ctx.save()
meteors.forEach(meteor=>{
    meteor.draw()
  })
ctx.restore()
ctx.save()
ctx.translate(ww/2,wh/2)
ctx.beginPath()
ctx.arc(3*ww/8-ww/16+30,3*(-wh/8),ww/16,0,2*Math.PI)
ctx.fillStyle="rgba(0,0,0,1)"
ctx.fill()
ctx.strokeStyle="rgba(0,0,0,1)"
ctx.stroke()
ctx.restore()
}


function update(){
//   調整增加的機率
if(Math.random()<0.15){
  addStar()
}
if(Math.random()<0.01){
   addMeteor()
}

draw()
 requestAnimationFrame(update)
}
function loaded(){
initCanvas()
update()
}
function addStar(){

if(stars.length<30){//數量不夠就新增
  //新增時的參數
 var randomx=ww*Math.random()
 var randomy=wh*Math.random()
 while((randomx>3*ww/4&&randomy<wh/4)){
  randomx=ww*Math.random()
  randomy=wh*Math.random()
 }
  
  stars.push(new star({
    size: 5*Math.random()+3,
    x:randomx,
    y:randomy,
    hz:Math.random()*90,
    a:1
  }))
}
stars=stars.filter(checkStar)//控制移除的條件施
}

function addMeteor(){
meteors=meteors.filter(checkMeteor)//控制移除的條件
if(meteors.length<10){//數量不夠就新增
  //新增時的參數
  meteors.push(new meteor({
    x: ww/2*Math.random(),
    y: wh/2*Math.random(),
    long:100*Math.random()+50,
    spd:1
  }))
}
}


//控制移除的條件施
function checkStar(star){
return star.a>0.1
}
function checkMeteor(meteor){
return meteor.spd+meteor.y<wh/2
}
window.addEventListener("resize",initCanvas)
window.addEventListener("load",loaded)


</script>