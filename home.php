<!-- First Container : Qui suis-je? -->
<div class="container-fluid bg-2 text-center">
  <h2 class="section-heading text-uppercase margin"><?echo Titre_intro;?></h2>
  <img src="image/Maphoto.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
  <p class="introduction"><?echo MSG_INTRO;?></p>
</div>

<!-- Fourth Container (Grid  - Mes réalisations 3   -->
<div class="container-fluid bg-3 text-center"  id="rea">    
      <h2 class="section-heading text-uppercase"><?echo Titre_BG_3;?></h2><br>
      <div class="row">
        <div class="col-sm-3 rea">
			<a href="index.php?page=mesrea&css='.$css.'"><img src="image/programmingcolor.png" class="img-responsive margin" style="width:50%; display:inline-block;" alt="Image"></a>
            <h4><?echo Titre_section_BG3_1?></h4>
            <p><?echo msg_section_BG3_1?> </p>
        </div>
        <div class="col-sm-3 rea"> 
             <a href="index.php?page=mesrea&css='.$css.'"><img src="image/design-color.png" class="img-responsive margin" style="width:50%; display:inline-block;" alt="Image"></a>
             <h4><?echo Titre_section_BG3_2?></h4>
              <p><?echo msg_section_BG3_2?></p>
        </div>
        <div class="col-sm-3 rea"> 
			<a href="index.php?page=mesrea&css='.$css.'"><img src="image/locatradu" class="img-responsive margin" style="width:50%; display:inline-block;" alt="Image"></a>
             <h4><?echo Titre_section_BG3_3?></h4>
              <p><?echo msg_section_BG3_3?></p>
        </div>
        <div class="col-sm-3 rea">
			<a href="index.php?page=mesrea&css='.$css.'"><img src="image/group-blanc.png" class="img-responsive margin" style="width:50%; display:inline-block;" alt="Image"></a>
          <h4><?echo Titre_section_BG3_4;?></h4>
          <p><?echo msg_section_BG3_4;?></p>
        </div>
      </div>
</div>
<!-- Second Container - Mes compétences 4 -->
<div class="container-fluid bg-4 text-center" id="competence">
  <h2 class="section-heading text-uppercase"><?echo Titre_Bg_4;?></h2>
  	<div class="container1">
  <h3><?echo Titre_section_BG4_1?></h3>
  <div class="chart" data-percent="95">HTML5</div>
  <div class="chart" data-percent="95">CSS3</div>
  <div class="chart" data-percent="70">Javascript</div>
  <div class="chart" data-percent="70">Php</div>
  <div class="chart" data-percent="80">Wp</div>
</div>
<div class="container1">
  <h3><?echo Titre_section_BG4_2?></h3>
  <div class="chart" data-percent="105"><?echo msg_section_BG4_2_1?></div>
  <div class="chart" data-percent="95"><?echo msg_section_BG4_2_2?></div>
  <div class="chart" data-percent="70"><?echo msg_section_BG4_2_3?></div>
</div>
<div class="container">
 <h3><?echo Titre_section_BG4_3?></h3> 
 <div class="row">
  <div class="col-md-6 wrapper">
        <h3 class="how-title"><?echo Titre_section_BG4_4?></h3>
				<br><br>
        <div class="skill">
            <p>Adobe Indesign</p>
            <div class="skill-bar skill5 wow slideInLeft animated">
                <span class="skill-count5">80%</span>
            </div>
        </div>
        <div class="skill">
            <p>Adobe Photoshop</p>
            <div class="skill-bar skill3 wow slideInLeft animated">
                <span class="skill-count3">75%</span>
            </div>
        </div>
          <div class="skill">
            <p>Trados SDL studio</p>
            <div class="skill-bar skill2 wow slideInLeft animated">
                 <span class="skill-count2">85%</span>
            </div>
        </div>
        <div class="skill">
            <p>Adobe Premier Pro</p>
            <div class="skill-bar skill4 wow slideInLeft animated">
                <span class="skill-count4">65%</span>
            </div>
        </div>
    </div>
 <div class="col-md-6">
  <h3 class="how-title"><?echo Titre_section_BG4_5?></h3>
    <a href="https://fr.wordpress.com/"><img src="image/wordpress.png" class="img-responsive margin" style="max-width:50%;padding-left: 10%;padding-top: 5%;"/></a>
    <a href="https://magento.com/"><img src="image/Magento.png" class="img-responsive margin" style="max-width:50%;padding-left: 10%;display:inline-block;"/></a>
 </div></div>
    </div>
    </div>

<!-- Third Container (Grid) - Mon parcours 5-->
<div class="container-fluid bg-5 text-center" id="mesexp">    
  <h2 class="section-heading text-uppercase"><?echo Titre_Bg_5;?></h2>
    <div class="row">
        <div id="timeline">
            <div class="row timeline-movement timeline-movement-top">
                <div class="timeline-badge timeline-future-movement"><br/>2018</div>
            </div>

<div class="row timeline-movement">
    <div class="timeline-badge center-left"></div>
        <div class="offset-sm-6 col-sm-6 timeline-item">
            <div class="row">
                <div class="offset-sm-1 col-sm-11">
                    <div class="timeline-panel debits anim animate fadeInLeft">
                        <div class="lefting-wrap">
                            <ul>
 	<li class="img-wraping"><a href="#"><img class="img-responsive" src="image/logo_CD67.png" alt="user-image" /></a></li>
</ul>
                        </div>
                        <div class="righting-wrap">
                            <ul>
 	<li><a class="importo" href="http://bas-rhin.fr"><?echo Titre_section_BG5?></a></li>
 	<li><span class="causale" style="color: #000; font-weight: 600;"><?echo Role_BG5?></span></li>
 	<li><span class="causale"><?echo Mission_BG5?></span></li>
 	<li><small class="text-muted"><i class="glyphicon glyphicon-time"></i> <?echo Date_BG5?></small></li>
</ul>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
</div>

<div class="row timeline-movement">
    <div class="timeline-badge center-right"></div>
        <div class="col-sm-6 timeline-item">
            <div class="row">
                <div class="col-sm-11">
                    <div class="timeline-panel credits anim animate fadeInRight">
                        <div class="lefting-wrap">
                            <ul>
                                <li class="img-wraping"><a href="#"><img class="img-responsive" src="image/logo_CD67.png" alt="user-image" /></a></li>
                            </ul>
                        </div>
                        <div class="righting-wrap">
                            <ul>
                                <li><a class="importo" href="http://bas-rhin.fr"><?echo Titre_section_BG5_1?></a></li>
                                <li><span class="causale" style="color: #000; font-weight: 600;"><?echo Role_BG5_1?></span></li>
                                <li><span class="causale"></span><?echo Mission_BG5_1?></li>
                                <li><small class="text-muted"><i class="glyphicon glyphicon-time"></i> <?echo Date_BG5_1?></small>></li>
    </ul>
    </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
</div>

<div class="row timeline-movement timeline-movement-top">
    <div class="timeline-badge timeline-future-movement"><br/>2017</div>
</div>

<div class="row timeline-movement">
    <div class="timeline-badge center-Left"></div>
    <div class="col-sm-6 timeline-item">
        <div class="row">
            <div class="col-sm-11">
                <div class="timeline-panel debits anim animate fadeInLeft">
                    <div class="lefting-wrap">
                            <ul>
                                <li class="img-wraping"><a href="#"><img class="img-responsive" src="image/mastercaweb.png" alt="user-image" /></a></li>
                            </ul>
                        </div>
                        <div class="righting-wrap">
                            <ul>
 	<li><a class="importo" href="mastercaweb.u-strasbg.fr"><?echo Titre_section_BG5_2?></a></li>
 	<li><span class="causale" style="color: #000; font-weight: 600;"><?echo Role_BG5_2?></span></li>
 	<li><span class="causale"><?echo Mission_BG5_2?></span></li>
 	<li><small class="text-muted"><i class="glyphicon glyphicon-time"></i> <?echo Date_BG5_2?></small></li>
</ul>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
</div>

 <div class="row timeline-movement">
    <div class="timeline-badge center-right"></div>
    <div class="col-sm-6 timeline-item">
        <div class="row">
            <div class="col-sm-11">
                <div class="timeline-panel credits anim animate fadeInRight">
                    <div class="lefting-wrap">
                        <ul>
            <li class="img-wraping"><a href="#"><img class="img-responsive" src="image/catra.jpg" alt="user-image" /></a></li>
        </ul>
                    </div>
                    <div class="righting-wrap">
					<ul>
						<li><a class="importo" href="http://www.catra.fr/"><?echo Titre_section_BG5_3?></a></li>
						<li><span class="causale" style="color: #000; font-weight: 600;"><?echo Role_BG5_3?></span></li>
						<li><span class="causale"><?echo Mission_BG5_3?></span></li>
						<li><small class="text-muted"><i class="glyphicon glyphicon-time"></i> <?echo Date_BG5_3?></small></li>
					</ul>
					</div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row timeline-movement timeline-movement-top">
    <div class="timeline-badge timeline-future-movement"><br/>2016</div>
</div>

<div class="row timeline-movement">
    <div class="timeline-badge center-left"></div>
        <div class="col-sm-6 timeline-item">
            <div class="row">
                <div class="col-sm-11">
                    <div class="timeline-panel debits anim animate fadeInLeft">
                        <div class="lefting-wrap">
                            <ul>
                                <li class="img-wraping"><a href="#"><img class="img-responsive" src="image/logo-wag.png" alt="user-image" /></a></li>
                            </ul>
                        </div>
                        <div class="righting-wrap">
                            <ul>
                                <li><a class="importo" href="http://www.wag-inc.co.jp/en/wag-inc/"><?echo Titre_section_BG5_4?></a> </li>
                                <li><span class="causale" style="color: #000; font-weight: 600;"><?echo Role_BG5_4?></span></li>
                                <li><span class="causale"><?echo Mission_BG5_4?></span></li>
                                <li><small class="text-muted"><i class="glyphicon glyphicon-time"></i> <?echo Date_BG5_4?></small></li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                        </div>
                </div>
                </div>
            </div>
</div>
</div>
    </div>
</div>


<!-- Fifth Container Contact) -->
 <div class="container-fluid bg-6" id="contact"  style="background-image: url('image/contactform.jpg')">
 <h2 class="section-heading text-uppercase text-center"><?echo Titre_Bg6;?></h2><br>
  <div class="row">
    <div class="col-sm-12">
    <?php  

if(isset($_POST['submit'])) { 
    $to = "bourouis.nora@hotmail.fr";  
    $from = $_POST['email'];
    $prenom = $_POST['prenom']; 
    $nom = $_POST['nom']; // Idem, pour le nom. 
    $mess = $_POST['message']; // Le corps du message entré dans le formulaire 
    $subject = "Quelqu'un vous a envoyé un mail !!"; // L'objet du mail que JE vais recevoir 
    $subject2 = "Copie de votre mail"; 
    $message = $prenom . " " . $nom . " a écrit :" . "\n\n" . $_POST['message']; 
    $message2 = "Voici une copie de votre mail " . $prenom . " : \n\n" . $_POST['message']; // Le corps du mail que L'ENVOYEUR va recevoir 

    $headers = "De:" . $from; // L'entête du mail que JE vais recevoir, dans lequel figure l'adresse mail de l'envoyeur 
    $headers2 = "De:" . $to; // L'entête du mail que L'ENVOYEUR vais recevoir, dans lequel figure MON adresse mail 
    $sendto = mail($to,$subject,$message,$headers); // on met dans une variable "$sendto" l'envoi du mail qui JE recevrai, pour pouvoir rapidement le réutiliser après 
    $sendfrom = mail($from,$subject2,$message2,$headers2); // pareil pour le mail que l'envoyeur recevra (sa copie) 
     
     
    if ( ($from != null) && ($prenom != null) && ($nom != null) && ($mess != null) ) { // si tous les champs sont remplis... 
     
        if (preg_match("!^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,12}$!", $from)) { 

            if (($sendto) && ($sendfrom)) { 

                echo '<script>alert("'.MSG_ok.'")</script>' ;
            } 

        } else { // ...si l'adresse n'est pas valide (elle ne respecte pas le pattern qu'on a entré) 
             
            echo MSG_erreur ;
        } 
     
    } else { // si un ou plusieurs champs n'ont pas été remplis... 
         
       echo MSG_erreur2; // petit message d'erreur 
    } 
     
} ?>
     <form action="" method="post" class="contactezmoi"> 
            <label class="mail"><?echo Label_nom;?></label><input type="text" name="nom"><br/> 
            <label class="mail"><?echo Label_prenom;?></label><input type="text" name="prenom"><br/> 
            <label class="mail"><?echo Label_mail;?> </label><input type="text" name="email"><br/> 
            <label class="mail"><?echo Label_mess;?></label><textarea rows="5" name="message" cols="30"></textarea><br/> 
            <input type="submit" name="submit" value="<?php echo Envoyer; ?>"> 
        </form> 
    </div>
</div>
</div>

<section id="bsocials">
	<div class="container-fluid bg-7">
		<p class="social-label"><?echo Titre_Bg7;?></p>
        <p class="social-text"> &gt;&gt; <span class="follow line-1 anim animate anim-typewriter"><?echo Titre_Bg7_1;?></span>  &lt;&lt; </p>
		    <ol class="social">
                <li class="social-fa"><a href="https://www.facebook.com/nora.bour"><i class="fa fa-facebook fa-2x"></i></a></li>
                &nbsp;
                <li class="social-in"><a href="https://www.instagram.com/nor.a_b/"><i class="fa fa-instagram fa-2x"></i></a></li>
                &nbsp;
                <li class="social-li"><a href="https://www.linkedin.com/in/nora-bourouis-8543b1b5/"><i class="fa fa-linkedin fa-2x"></i></a></li>
                &nbsp;
                <li class="social-em"><a href="mailto:bourouis.nora@hotmail.fr"><i class="fa fa-envelope fa-2x"></i></a></li>
			</ol>
	</div>
</section>