<?php include 'includes/adminparseSignup.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
        <!--start of bootstrap css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <!--end of  bootstrap css -->
        <!-- start of fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Girassol&family=Goblin+One&family=Mulish:wght@200;500&family=Orelega+One&display=swap" rel="stylesheet">
        <!-- end of fonts -->
        <link rel="stylesheet" href="../css/adminSignup.css">
         <!-- start of style for header and footer-->
        <link rel="stylesheet" href="../css/adminFooterandheader.css">
        <!-- end of style for header and footer-->
</head>
<body>
    <div class="container-fluid">
        <header>
            <nav class="navbar ">
                <div class="container-fluid">
                  <a href="index.html" class="navbar-brand sign-in-logo">AEE</a>
                  <a href="help.html" class="d-flex help text-danger">Help</a>
                </div>
              </nav>
        </header>
        <section>
            <div class="container container-sign-up text-center">
                <div class="sign-up-box">
                <h1>Sign up</h1>
                <h3>Create an AEE account</h3>
                <?php if(isset($result)) echo $result; ?>
                <?php if(isset($result1)) echo $result1; ?>
                <?php if(!empty($errors)) echo show_errors($errors); ?>
                    <form class="row g-3 form-floating" method="POST" action="">
                        <div class="col-sm-6 form-floating">

                        <input type="text" name="firstname" class="form-control" id="first-name-input" placeholder="First name">
                        <label for="first-name-input" class="form-label">First name</label>
                        </div>
                        <div class="col-sm-6 form-floating">
                            
                            <input type="text" name="lastname" class="form-control" id="last-name-input" placeholder="last name">
                            <label for="last-name-input" class="form-label">last name</label>
                        </div>
                        <div class="col-sm-12 form-floating"> 
                            <input type="text" name="username" class="form-control" id="username-input" placeholder="username">
                            <label for="username-input" class="form-label">username</label>
                        </div>
                        <div class="col-sm-12 form-floating"> 
                            <input type="date" name="date_of_birth" class="form-control" id="calendar-input" placeholder="calendar">
                            <label for="calendar-input" class="form-label">Date of Birth</label>
                        </div>
                        <div class="col-sm-12 form-floating"> 
                            <input type="email" name="email_address" class="form-control" id="email-input" placeholder="Email address">
                            <label for="email-input" class="form-label">Email address</label>
                        </div>
                        <div class="col-sm-12 form-floating">
                            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword" class="form-label">Password</label>
                            <i class="bi bi-eye-slash" id="togglePassword"></i>
                        
                        </div>
                        <div class="col-sm-3 form-floating">
                            <input type="text" name="country_code"  class="form-control" id="country-code" placeholder="+234" disabled>
                            <label for="country-code" class="form-label">+234</label>
                        
                        </div>
                        <div class="col-sm-9 form-floating">
                            <input type="text" name="phone_number" class="form-control" id="phone-number" placeholder="Mobile phone number">
                            <label for="phone-number" class="form-label">Mobile phone number</label>
                        
                        </div>
                        <div class="col-sm-12 form-floating">
                        
                        <input type="text" name="address" class="form-control" id="Address-input" placeholder="Address">
                        <label for="Address-input" class="form-label">Address</label>
                        </div>
                        
                    
                        <div class="col-sm-4">
                        <label for="inputstate" class="form-label state">State</label>
                        <select id="inputstate" name="state" class="form-select bg-dark" >
                            <option selected disabled>Choose...</option>
                            <option value="Abia">Abia</option>
                            <option value="Adamawa">Adamawa</option>
                            <option value="Akwa Ibom">Akwa Ibom</option>
                            <option value="Anambra">Anambra</option>
                            <option value="Bauchi">Bauchi</option>
                            <option value="Bayelsa">Bayelsa</option>
                            <option value="Benue">Benue</option>
                            <option value="Borno">Borno</option>
                            <option value="Cross River">Cross River</option>
                            <option value="Delta">Delta</option>
                            <option value="Ebonyi">Ebonyi</option>
                            <option value="Edo">Edo</option>
                            <option value="Ekiti">Ekiti</option>
                            <option value="Enugu">Enugu</option>
                            <option value="Gombe">Gombe</option>
                            <option value="Imo">Imo</option>
                            <option value="Jigawa">Jigawa</option>
                            <option value="Kaduna">Kaduna</option>
                            <option value="Kano">Kano</option>
                            <option value="Katsina">Katsina</option>
                            <option value="Kebbi">Kebbi</option>
                            <option value="Kogi">Kogi</option>
                            <option value="Kwara">Kwara</option>
                            <option value="Lagos">Lagos</option>
                            <option value="Nasarawa">Nasarawa</option>
                            <option value="Niger">Niger</option>
                            <option value="Ogun">Ogun</option>
                            <option value="Ondo">Ondo</option>
                            <option value="Osun">Osun</option>
                            <option value="Oyo">Oyo</option>
                            <option value="Plateau">Plateau</option>
                            <option value="Rivers">Rivers</option>
                            <option value="Sokoto">Sokoto</option>
                            <option value="Taraba">Taraba</option>
                            <option value="Yobe">Yobe</option>
                            <option value="Zamfara">Zamfara</option>
                            <option value="">FCT(Abuja)</option>
                        </select>
                        </div>
                        <div class="col-sm-4 form-floating">
                        <input type="text" name="zip_code" class="form-control" id="inputZip" placeholder="Zip" maxlength="10">
                        <label for="inputZip" class="form-label">Zip</label>
                        </div>
                        <div class="col--sm-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label text-light" for="gridCheck">Check to agree to <a href="#" class="terms-and-condition text-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Terms and condition</a>


                                
                                
                                <!-- Modal -->
                                <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus quis at possimus vel explicabo dolore consequuntur accusantium suscipit aspernatur, voluptas non fuga repellat ratione unde temporibus nemo numquam. Praesentium doloremque illum, quam, maxime aperiam tempora sunt explicabo modi blanditiis alias rem quod voluptatum harum architecto tempore sed sit nostrum nobis beatae delectus eum, accusantium sint ullam consectetur? Voluptates, iste dolore nihil nisi corporis pariatur libero ratione fuga recusandae laboriosam aliquam tenetur earum at velit quasi eius. Libero sequi facilis totam aperiam quasi? Sit voluptates doloribus corporis ipsa quia consequatur deleniti fuga inventore! Necessitatibus, accusamus. Explicabo, sequi non reprehenderit ipsam quis architecto itaque amet exercitationem repudiandae! Iste voluptas laudantium fugit rerum officiis maxime eveniet dolores eos vel, placeat quae minima molestiae inventore accusamus consectetur fugiat possimus dignissimos. Nesciunt quisquam aspernatur sit minima cum sapiente corrupti dolorum! Enim non dolor nulla quos ea blanditiis reiciendis atque illum aut expedita exercitationem reprehenderit provident maxime sint doloribus omnis, consequuntur similique quibusdam eveniet, nam id! Deleniti beatae provident quaerat libero laboriosam quis architecto ex cupiditate voluptatibus? Ut maiores qui quasi eaque dicta tempora? Laborum cumque rem id maiores blanditiis odit eaque beatae quis, quisquam magnam laudantium, facilis, facere vel quidem numquam ducimus ratione iste dolor illum repellat dolorem neque saepe. Odio quod quidem veniam officiis fugiat qui dolorem et maxime unde dolor natus earum repudiandae, incidunt odit consequuntur porro rerum nisi voluptate iusto dolores. Earum, dolorem harum? Officiis ea perferendis dignissimos eligendi ducimus necessitatibus excepturi est hic? Distinctio suscipit, ad dignissimos corrupti et tenetur alias tempore esse incidunt itaque beatae quidem facere. Tempore natus numquam qui, asperiores eius, ipsum obcaecati dignissimos amet sed voluptas dolore consequatur praesentium quibusdam ab voluptates quod facere corrupti est iste. Ducimus nisi modi odio, debitis vitae facilis nam voluptate voluptatibus, commodi ipsum reiciendis pariatur placeat asperiores aliquam excepturi ipsa maxime ipsam voluptas veniam maiores soluta dolorum impedit? Doloremque, placeat iure porro veniam eveniet nemo. Animi autem delectus assumenda sequi, odit error culpa rerum sit similique quisquam nemo dolorem doloribus aperiam vero est explicabo perferendis deleniti! Repudiandae, labore! Impedit iusto neque, dolorem recusandae delectus reiciendis ipsum corrupti laborum harum facilis blanditiis sequi inventore praesentium facere, error illum rerum sit voluptatum quis! Ex voluptas voluptatum temporibus minus unde odit at assumenda quod voluptate, quaerat reiciendis. Architecto, corporis eligendi, iure asperiores similique, reiciendis sapiente temporibus obcaecati voluptate a in quam error repudiandae! Sequi ipsa et provident beatae, iure officia libero magni. Minima totam possimus voluptates, itaque illum est dolore corporis ea ipsam debitis dolorem aliquid tempora adipisci reiciendis, eligendi deleniti facilis iure magnam officiis perferendis doloremque beatae distinctio! Repudiandae rerum architecto odio tempore exercitationem? Deserunt, illo voluptatibus saepe omnis aperiam maiores voluptas repudiandae, a, perspiciatis natus minima obcaecati nobis consequuntur eveniet assumenda possimus in? Molestias recusandae porro nemo illum quas. Earum dolorum dolores voluptatibus in dolor ipsa rerum nemo placeat, natus alias quod suscipit culpa quibusdam tempora ullam veniam aspernatur, at pariatur nesciunt vero! Itaque, expedita. Minus veniam, aliquid animi quam repellendus, quis consequatur voluptatem vero tenetur reprehenderit assumenda mollitia voluptatum laboriosam vel.
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  
                                        </div>
                                    </div>
                                    </div>
                                </div>



                           
                            </label>
                        </div>
                        </div>
                        <div class="col--sm-12">



                        <input type="submit" name="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" value="Sign up">
                        <!-- Button trigger modal -->
                        <!-- Modal -->
                        <!-- <div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Success</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        You have successfully signed up!!!
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <a href="signin.html"  class="btn btn-primary">Sign in</a>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        </div>
                        
                    </form>
                </div>
            </div>
        </section>
</div>
<?php include 'includes/adminFooter.php'?>