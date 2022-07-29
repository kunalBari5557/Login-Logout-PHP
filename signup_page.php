<html>  
   <head>  
      <meta charset = "utf-8">  
      <meta name = "viewport" content = "width = device-width, initial-scale = 1, shrink-to-fit = no">  
      <link rel = "stylesheet"   
         href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  
         integrity = "sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"   
         crossorigin = "anonymous">         
      <title> Registration Form  </title>  
   <style>  
 .note  
{  
     
    height: 80px;  
    background:-webkit-linear-gradient(left, #0072ff, #8811c5);  
    

  
       
}  
body  {  
  
  font-family: 'Lato', sans-serif;  
  font-size: 12px;  
  line-height: 1.8em;  
  text-transform: none;  
  letter-spacing: .075em;  
  font-weight: bold;  
  font-style: normal;  
  color: #e7bd74;  
  background-color:#CCC;  
 
}  

.title {  
  margin-top: 2rem;  
  margin-bottom: 1rem;  
}  
.form-content 
{  
    padding: 5%;  

}  
.form-control {  
    border-radius: 5rem;  
}  
.tnSubmit  
{  
    border: none;  
    border-radius: 1.5rem;  
    padding: 1%;  
    width: 20%;  
    background: #0062cc;  
    color: #fff;  
}  


h1 {  
    font-family: sans-serif;  
  display: block;  
  font-size: 1rem;  
  font-weight: bold;  
  text-align: center;  
  letter-spacing: 3px;  
  color: hotpink;  
 text-transform: uppercase;  
padding-top: 50px;  
}  
a {  
  text-decoration: none;  
  color: #fff;  
}  
a:hover {  
  text-decoration: none;  
  color: #fff;  
}
  
      </style>  
   </head>  
   <body>  
    <form action="signup_page1.php" method="post">
<div class="container register-form">  
            <div class="form">  
                <div class="note">  
                    <h1> Registration Form </h1>  
                </div>  
                <div class="form-content">  
                    <div class="row">  
                        <div class="col-md-6">                         
                            <div class="form-group">  
                                <input type="username" class="form-control" placeholder=" Username " value="" name="username" required >  
                            </div>  
                       
                                
                             <div class="form-group">  
                                <input type="Email" class="form-control" placeholder="Email " value="" name="email" required >  
                             </div> 
                            

                        
                            <div class="form-group">  
                                <input type="date" class="form-control" placeholder="Date" value="" name="dob" required>  
                            </div>  
                            
                     </div>  
                 </div> 
                 
            
                         <div class="form-group">  
                           <div class="row">
                             <div class="col-md-6">  
                                <input type="password" class="form-control" placeholder="Password " value="" name="password" required>  
                             </div>
                            </div>
                          </div>
                          <div class="row justify-content-start mt-4">  
            <div class="col">  
              <div class="form-check">  
                <label class="form-check-label">  
                  <input type="checkbox" class="form-check-input">  
                  I hereby agree to the <a href="/"> Terms and Conditions. </a>  
                </label>  
              </div>  
                    <input type="submit" class="btnSubmit" value="submit" placeholder="submit" name="submit" required/> 
                     <p style="font-size: 12px; margin-top: 10px;  color: #00376b;">You have an account? <a href="login_page.php">Login Here</a> </p>
    
                </div>  
            </div>  
        </div>  
    </form>
        

    
</body>  
</html>  