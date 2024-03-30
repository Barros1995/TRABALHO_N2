<?php
 require_once './actions/config.php';
     $sql = "SELECT * FROM usuarios";
     $stmt = $conn->query($sql);
     $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Trafalgar</title>
         <link rel="stylesheet" href="css/style.css">
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
         <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

     </head>
     <body>
     <?php
        
        $mensagem = "Seus dados foram enviados com sucesso!";

     ?>

         <div id="mensagem-sucesso"><?php echo $mensagem; ?></div>

         <div class="container">
             <div class="header">

                 <div class="logo" ></div>
                 <div class="element"></div>
                 <div class="imagem1"></div>
                 <div class="header-text">
                       <div class="subtitulo">
                            <h1>Virtual healthcare<br> 
                              for you</h1></div>
                       <div class="texto1">
                            <span>Trafalgar provides progressive, and affordable 
                              healthcare, accessible on mobile and online<br> 
                              for everyone</span></div>  
                                    
                       <div class="consult-btn">
                            <div class="botao1">Consult today</div>
                       </div>            
                                                                          
                 </div>
                 <div class="top-nav">
                        
                    <ul>
                         <li><a href="#" class="home">Home</a></li>
                         <li><a href="#" class="doctor">Find a doctor</a></li>
                         <li><a href="#" class="apps">Apps</a></li>
                         <li><a href="#" class="testimonials">Testimonials</a></li>
                         <li><a href="#" class="about">About us</a></li>
                     </ul>
                     
                        
                 </div>
                                                                                        
               </div>

          </div>
        
          <div class="our-services">
               <div class="services"></div>
                    <div class="emergency-care">
                         <div class="frame-2"></div>
                         <div class="text-5">
                              <span>You can get 24/7 urgent care for<br>yourself or your children and your<br> lovely family</span></div>
                         <div class ="text-6">
                              <span>Emergency care</span>
                         </div>

                    </div>
                    <div class="tracking">
                         <div class="frame-3"> </div>
                         <div class="text-7">
                              <span>Track and save your medical history and health data </span>
                         </div>
                         <div class="text-8">
                              <span>Tracking</span>
                         </div>
                              
                    </div>
                    <div class="detail-info">
                         <div class="frame-4"></div>
                         <div class="text-9">
                              <span>Free consultation with our trusted doctors and get the best recomendations</span>
                         </div>
                         <div class="text-10">
                              <span>Details info</span>
                         </div>
                    </div>
                    <div class="online-pharmacy">
                         <div class="frame-5"></div>
                         <div class="text-11">
                              <span>Buy  your medicines with our<br> mobile application with a simple<br> delivery system</span>
                         </div>
                         <div class="text-12">
                              <span>Online pharmacy</span>
                         </div>

                    </div>
                    <div class="consultation">
                         <div class="frame-6"></div>
                         <div class="text-13">
                              <span>Free consultation with our trusted doctors and get the best recomendations</span>
                         </div>
                         <div class="text-14">
                              <span>Consultation</span></div>
                    </div>
                    
                    <div class="search-doctor">
                         <div class="frame-7"></div>
                         <div class="text-15">
                              <span>Choose your doctor from thousands of specialist, general, and trusted hospitals</span></div>
                         <div class="text-16">
                              <span>Search doctor</span>
                         </div>

                    </div>
               </div>
               <div class="text-2">
                    <div class="retangulo"></div>
                    <div class="text-3">
                        <span>We provide to you the best choiches for you. Adjust it to your health needs and make sure your undergo treatment with our highly qualified doctors you can consult with us which type of service is suitable for your health</span>
     
                    </div> 
                    <div class="text-4">
                         <span>Our services</span>
                    </div>
           
               </div>
               <div class="element2"></div>

                    
               <div class="bg-element">      
                    <div class="frame"></div>      
               </div>  

               <div class="bnt">
                    <div class="text-17">
                         <span>Learn more</span>
                    </div>
                        
               </div>
               
          </div>
          <div class ="leading">
               <div class="frame-8"></div> 
               <div class="texto2">
                   <div class="retangulo2"></div>
                   <div class="text-18">
                         <span>Trafalgar provides progressive, and affordable healthcare, accessible on mobile and online for everyone. To us, it’s not just work. We take pride<br> 
                              in the solutions we deliver
                         </span>
                    </div>
                    <div class="text-19">
                         <span>Leading healthcare providers

                         </span>
                    </div>
                    <div class="bnt2">
                         <div class="text-20">
                              <span>Learn more

                              </span>
                         </div>
                    </div>
                   
               </div>
          </div>
          <form  id="meuFormulario" action="./actions/fomularios.php" method="post">
               <div class="out-lates">
                    <div class="retangulo3"></div>

                    <div class="text-21">
                         <span>Agendar consulta</span>
                    </div>
                    <div class="base-bnt3">
                         <button type="submit"  id="botaoEnviar" class="bnt3" >Enviar</button>
                    </div>
                         
               </div>
               <div class="footer-1">
               <div class="quadro1">
                         <div class="text-23">
                              <span>CPF</span>
                         </div>
               </div>
               
               <div class="retangulo4">      
                         <input type="text" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="999.999.999-99"> 
                         
                         </input>
               </div>

               <div class="quadro2">
                    <div class="text-24">
                         <span>Nome</span>
                    </div>
               </div>
               <div class="retangulo5">
                         <input type="text" name ="nome" placeholder>

                         </input>
               </div>
               <div class="quadro3">
                    <div class="text-25">
                         <span>E-mail</span>
                    </div>
               </div>
               <div class="retangulo6">
                         <input type="email" name ="email" placeholder>

                       
               </div>
               <div class="quadro4">
                    <div class="text-26">
                              <span>Data</span>
                    </div>    
               </div>

               <div class="retangulo7"> 
                         <input type="date" name ="calendario" placeholder>
                       
                    </div>      
                    
                    <div class="quadro5">
                         <div class ="text-27">
                              <span>Telefone</span>
                         </div>
               </div>
               <div class="retangulo8"> 
                         <input type="tel" name="telefone" placeholder="(xx) xxxx-xxxx">
                         
                    </div>   
                    <div class="quadro6">
                         <div class="text-28">
                              <span>Horário</span>
                         </div>
                    </div>
                    <div class="retangulo9">
                         <input type="time" name="horario" placeholder>    
                    </div>
                        
               </div>
              
          </form>
          <div class="footer-2">
               <div class="element3">

               </div>
               <div class="help">
                    <div class="text-29">
                         <span>Help</span>
                    </div>
                    <div class="text-30">
                         <span>Help center<br>
                              Contact support<br>
                              Instructions<br>
                              How it works</span>
                    </div>
               </div>
               <div class="region">
                    <div class="text-31">
                         <span>Region

                         </span>
                    </div>
                    <div class="text-32">
                         <span>Indonesia<br>
                              Singapore<br>
                              Hongkong<br>
                              Canada</span>
                    </div>
               
               </div>
               <div class="company">
                    <div class="text-33">
                         <span>Company

                         </span>

                    </div>
                    <div class="text-34">
                         <span>About<br>
                              Testimonials<br>
                              Find a doctor<br>
                              Apps
                         </span>
                    </div>
               </div>
             
               <div class="elipse">
                    <div class="t">
                         <span>T</span>
                    </div>
               </div>
               <div class="text-35">
                    <span>Trafalgar

                    </span>
               </div>
               <div class="text-36">
                    <span>Trafalgar provides progressive, and affordable healthcare, accessible on mobile and online<br> 
                         for everyone</span>
               </div>
               <div class="text-37">
                    <span>©Trafalgar PTY LTD 2020. All rights reserved

                    </span>
               </div>
                                 
          </div>
          
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>   
          <script>
          document.addEventListener('DOMContentLoaded', function() {
                  var botaoEnviar = document.getElementById('botaoEnviar');
                  var formulario = document.getElementById('meuFormulario');

                  botaoEnviar.addEventListener('click', function(e) {
                   e.preventDefault();

                  Swal.fire({
                       title: 'Você tem certeza?',
                       text: "Você não poderá reverter isso!",
                       icon: 'warning',
                       showCancelButton: true,
                       confirmButtonColor: '#3085d6',
                       cancelButtonColor: '#d33',
                       confirmButtonText: 'Sim, enviar agora!'
               }).then((result) => {
                 if (result.isConfirmed) {
                         formulario.submit(); 

                    Swal.fire({
                       title: 'Dados enviados com sucesso!',
                       text: 'Seus dados foram registrados no banco de dados.',
                       icon: 'success',
                       showCancelButton: true,
                       allowOutsideClick: false              
                                         
                    });

                     }
               });

              });
           });  
          </script> 

          <script>
          document.addEventListener('DOMContentLoaded', function() {
          var mensagemSucesso = document.getElementById('mensagem-sucesso');

          if (mensagemSucesso) {
               Swal.fire({
                    title: 'Dados enviados com sucesso!',
                    text: 'Seus dados foram registrados no banco de dados.',
                    icon: 'success',
                    showCancelButton: true,
                    allowOutsideClick: false,
                    cancelButtonText: 'Cancelar',
                    confirmButtonText: 'OK'
               }).then((result) => {
                    if (result.isConfirmed) {
                         mensagemSucesso.innerHTML = '';
                    } else if (result.isDismissed) {
                         mensagemSucesso.innerHTML = '';
                    }
               });
          }
         });
         </script>
         
          

          <script type="text/javascript">
          window.onload = function() {
             
               window.open('listaConsultas.php', '_blank');
          };
          </script>

              
     </body>
</html>