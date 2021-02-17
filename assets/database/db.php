<?php
//$date = date("m.d.y");
$users = [
  new User ("Antonio","Quattrocchi","M","06/03/1985",36,"C.da P.R. (BN) 82020","0001","Antq","poropollo","n.p.","ant.85.q@gmail.com",true,01,01,"21-10-2021",false,true,true,true,"https://www.w3schools.com/w3images/avatar2.png"),
  new User ("Ciccio","Carduccio","M","06/06/1988",33,"Via la Stella a dx 82100","0002","CiccioC","pirirpillo88","n.p.","pluto.88@gmail.com",true,02,02,"18-10-2021",false,false,false,false,"https://image.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg"),
  new User ("Leila","Lulla","F","12/06/1984",37,"Via La Stretta","0003","Lullabi","lulla84bia","n.p.","lulla.84@gmail.com",true,03,03,"20-10-2021",false,false,true,true,"https://www.w3schools.com/howto/img_avatar2.png"),
];

$posts = [
  new Post("01","Riusciranno i nostri eroi a far-la Franca?!","Storia di un gruppo di amici di Franca","https://www.nicepng.com/png/full/156-1567695_profile-img-.png",["satira","cronaca","politica"],["#franca","#amicidifranca"],"0001","20-10-2021"),
  new Post("02","Franca colpisce ancora, ma gli amici gentili no!!","Franca continua a stupire con rivelazioni irriverenti...","https://libreriamo.it/wp-content/uploads/2020/07/franca-valeri-1.jpg",["satira","cronaca","politica"],["#franca","#amicidifranca","#semprefranca"],"0001","21-10-2021"),
  new Post("03","Dopo Franca è un nuovo inizio per Gino","Gino torna alla ribalta anche senza Franca, le luci dello spettacolo si accendono ancora una volta per lui...","https://www.raiplay.it/cropgd/300x400/dl/img/2019/10/30/1572448801243_Gino%20il%20pollo%201536x2048_logo.jpg",["satira","aia","cortile"],["#franca","#gino&franca","#oragino"],"0003","21-10-2021"),
];

$comments = [
  new Comment("01","0002","03","Non ci crede nessuno che Gino la farà Franca","22-10-2021"),
  new Comment("01","0001","04","Ma infatti, sarà sicuramente Franca a farsi i nostri amici... 😇 ","22-10-2021"),
];