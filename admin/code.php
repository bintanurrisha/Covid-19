<?php

include('security.php');

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
/*registration form import from the database*/

    $email_query = "SELECT * FROM register WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');  
    }
    else
    {
        if($password === $cpassword)
        {
            $query = "INSERT INTO register (username,email,password) VALUES ('$username','$email','$password')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Admin Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: register.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: register.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            $_SESSION['status_code'] = "warning";
            header('Location: register.php');  
        }
    }

}
/*register edit start*/

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];

    $query = "UPDATE register SET username='$username', email='$email', password='$password' WHERE register_id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
    }
}

/*register edit end*/

/*register delete start*/

if(isset($_POST['delete_btn_register']))
{
    $id = $_POST['delete_id_register'];

    $query = "DELETE FROM register WHERE register_id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
    }    
}
/*register delete end*/

/*login form*/
if(isset($_POST['login_btn']))
{
    $email_login = $_POST['emaill']; 
    $password_login = $_POST['passwordd']; 

    $query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login' LIMIT 1";
    $query_run = mysqli_query($connection, $query);

   if(mysqli_fetch_array($query_run))
   {
        $_SESSION['username'] = $email_login;
        header('Location: index.php');
   } 
   else
   {
        $_SESSION['status'] = 'Email / Password is Invalid';
        header('Location: login.php');
   }
    
}


/*login form end*/

/*section start*/
if(isset($_POST['save__section']))
{
    $title = $_POST['title'];
    $image = $_FILES["image"]['name'];
    
/*section table import from the database*/
if(file_exists("upload/".$_FILES["image"]["name"]))
    {
        $store=$_FILES["image"]["name"];
        $_SESSION['status']="image already exists.'.$store.' ";
         header('Location: section.php');
    }
else{
        $query = "INSERT INTO section (`title`,`image`) VALUES ('$title','$image')";
        $query_run = mysqli_query($connection, $query);

            if($query_run)
                   {
                move_uploaded_file($_FILES["image"]["tmp_name"], "upload/".$_FILES["image"]["name"]);
                $_SESSION['status'] = " Added";
                $_SESSION['status_code'] = "success";
                header('Location: section.php');
                  }
            else 
            {
                $_SESSION['status'] = " Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: section.php');
            }

    }
}


/*
=================================================================
                    section end
===============================================================
*/

/* section edit start*/

if(isset($_POST['section_updatebtn']))
{
    $id = $_POST['edit_id'];
    $title = $_POST['edit_title'];
    $image = $_FILES["image"]['name'];

    $query = "UPDATE section SET title='$title', image='$image' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
                   {
                move_uploaded_file($_FILES["image"]["tmp_name"], "upload/".$_FILES["image"]["name"]);
                $_SESSION['status'] = " Added";
                $_SESSION['status_code'] = "success";
                header('Location: section.php');
                  }
            else 
            {
                $_SESSION['status'] = " Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: section.php');
            }

}

/* section edit end*/

/*section delete start*/

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM section WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: section.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: section.php'); 
    }    
}
/*section delete end*/


/* prevent section start*/
if(isset($_POST['save__Prevent_section']))
{
    $Prevent_title = $_POST['Prevent_title'];
    $Prevent_image = $_FILES["Prevent_image"]['name'];
    
/*section table import from the database*/
if(file_exists("upload/".$_FILES["Prevent_image"]["name"]))
    {
        $store=$_FILES["Prevent_image"]["name"];
        $_SESSION['status']="image already exists.'.$store.' ";
         header('Location: prevent_section.php');
    }
else{
        $queryprevent = "INSERT INTO prevent_section (`Prevent_title`,`Prevent_image`) VALUES ('$Prevent_title','$Prevent_image')";
        $query_runprevent = mysqli_query($connection, $queryprevent);

            if($query_runprevent)
                   {
                move_uploaded_file($_FILES["Prevent_image"]["tmp_name"], "upload/".$_FILES["Prevent_image"]["name"]);
                $_SESSION['status'] = " Added";
                $_SESSION['status_code'] = "success";
                header('Location: prevent_section.php');
                  }
            else 
            {
                $_SESSION['status'] = " Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: prevent_section.php');
            }

    }
}


/*
=================================================================
                    section end
===============================================================
*/

/* section edit start*/

if(isset($_POST['Prevent_section_updatebtn']))
{
    $Prevent_id = $_POST['Prevent_edit_id'];
    $Prevent_title = $_POST['edit_Prevent_title'];
    $Prevent_image = $_FILES["Prevent_image"]['name'];

    $queryprevent = "UPDATE prevent_section SET Prevent_title='$Prevent_title', Prevent_image='$Prevent_image' WHERE Prevent_id='$Prevent_id' ";
    $query_runprevent = mysqli_query($connection, $queryprevent);

    if($query_runprevent)
                   {
                move_uploaded_file($_FILES["Prevent_image"]["tmp_name"], "upload/".$_FILES["Prevent_image"]["name"]);
                $_SESSION['status'] = " Added";
                $_SESSION['status_code'] = "success";
                header('Location: prevent_section.php');
                  }
            else 
            {
                $_SESSION['status'] = " Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: prevent_section.php');
            }

}

/* section edit end*/

/*section delete start*/

if(isset($_POST['prevent_delete_btn']))
{
    $Prevent_id = $_POST['prevent_delete_id'];

    $queryprevent = "DELETE FROM prevent_section WHERE Prevent_id='$Prevent_id' ";
    $query_runprevent = mysqli_query($connection, $queryprevent);

    if($query_runprevent)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: prevent_section.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: prevent_section.php'); 
    }    
}
/*section delete end*/

/*contact msg delete start*/

if(isset($_POST['delete_contact_btn']))
{
    $contact_Id = $_POST['delete_contact_Id'];

    $querycontact = "DELETE FROM contact_form WHERE contact_Id='$contact_Id' ";
    $query_runcontact = mysqli_query($connection, $querycontact);

    if($query_runcontact)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: contact.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: contact.php'); 
    }    
}
/*contact msg delete end*/




/*Subscribe delete start*/

if(isset($_POST['delete_subscribe_btn']))
{
    $subscribe_Id = $_POST['delete_subscribe_Id'];

    $querysubscribe = "DELETE FROM subcriber_table WHERE subscribe_Id='$subscribe_Id' ";
    $query_runsubscribe = mysqli_query($connection, $querysubscribe);

    if($query_runsubscribe)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: subscribe.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: subscribe.php'); 
    }    
}
/*Subscribe delete end*/
/*
=================================================================
                   about section start
===============================================================
*/


    if(isset($_POST['save_About_section']))
    {
        $about_title = $_POST['about_title'];
        $about_text = $_POST['about_text'];
        $about_image = $_FILES["about_image"]['name'];
        
    /*   about section table import from the database*/
    if(file_exists("upload/".$_FILES["about_image"]["name"]))
        {
            $store=$_FILES["about_image"]["name"];
            $_SESSION['status']="image already exists.'.$store.' ";
            header('Location: about-us-section.php');
        }
    else{
            $queryaboutus_section = "INSERT INTO about_section (`about_title`,`about_text`,`about_image`)
            VALUES ('$about_title','$about_text','$about_image')";
            $query_runaboutus_section = mysqli_query($connection, $queryaboutus_section);

                if($query_runaboutus_section)
                    {
                    move_uploaded_file($_FILES["about_image"]["tmp_name"], "upload/".$_FILES["about_image"]["name"]);
                    $_SESSION['status'] = " Added";
                    $_SESSION['status_code'] = "success";
                    header('Location: about-us-section.php');
                    }
                else 
                {
                    $_SESSION['status'] = " Not Added";
                    $_SESSION['status_code'] = "error";
                    header('Location: about-us-section.php');
                }

        }
    }

    /*    about section edit start*/

    if(isset($_POST['aboutus_section_updatebtn']))
    {
        $Id = $_POST['aboutus_edit_id'];
        $about_title = $_POST['edit_aboutus_Title'];
        $about_text = $_POST['edit_aboutus_text'];
        $about_image = $_FILES["about_image"]['name'];
        

        $queryaboutus_section = "UPDATE about_section SET
                                about_title='$about_title',
                                about_text='$about_text',
                                about_image='$about_image' WHERE Id='$Id' ";
        $query_runaboutus_section = mysqli_query($connection, $queryaboutus_section);

        if($query_runaboutus_section)
                    {
                    move_uploaded_file($_FILES["about_image"]["tmp_name"], "upload/".$_FILES["about_image"]["name"]);
                    $_SESSION['status'] = " Added";
                    $_SESSION['status_code'] = "success";
                    header('Location: about-us-section.php');
                    }
                else 
                {
                    $_SESSION['status'] = " Not Added";
                    $_SESSION['status_code'] = "error";
                    header('Location: about-us-section.php');
                }

    }

    /*  about section edit end*/

    /*  about section delete start*/

    if(isset($_POST['aboutus_delete_btn']))
    {
        $Id = $_POST['aboutus_delete_id'];

        $queryaboutus_section = "DELETE FROM about_section WHERE Id='$Id'";
        $query_runaboutus_section = mysqli_query($connection, $queryaboutus_section);

        if($query_runaboutus_section)
        {
            $_SESSION['status'] = "Your Data is Deleted";
            $_SESSION['status_code'] = "success";
            header('Location:about-us-section.php'); 
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT DELETED";       
            $_SESSION['status_code'] = "error";
            header('Location:about-us-section.php'); 
        }    
    }
/*   about section delete end*/

/*
=================================================================
                     about section end
===============================================================
*/
/*
=================================================================
                   about coronavirus section start
===============================================================
*/
if(isset($_POST['save_aboutcorona_section']))
{
    $aboutcorona_title = $_POST['aboutcorona_title'];
    $aboutcorona_Description = $_POST['aboutcorona_Description'];
    $aboutcorona_image = $_FILES["aboutcorona_image"]['name'];
    
/* about coronavirus section table import from the database*/
if(file_exists("upload/".$_FILES["aboutcorona_image"]["name"]))
    {
        $store=$_FILES["aboutcorona_image"]["name"];
        $_SESSION['status']="image already exists.'.$store.' ";
         header('Location: home-About Corona Virus.php');
    }
else{
        $queryaboutcorona_section = "INSERT INTO aboutcorona_section (`aboutcorona_title`,`aboutcorona_Description`,`aboutcorona_image`) VALUES ('$aboutcorona_title','$aboutcorona_Description','$aboutcorona_image')";
        $query_runaboutcorona_section = mysqli_query($connection, $queryaboutcorona_section);

            if($query_runaboutcorona_section)
                   {
                move_uploaded_file($_FILES["aboutcorona_image"]["tmp_name"], "upload/".$_FILES["aboutcorona_image"]["name"]);
                $_SESSION['status'] = " Added";
                $_SESSION['status_code'] = "success";
                header('Location: home-About Corona Virus.php');
                  }
            else 
            {
                $_SESSION['status'] = " Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: home-About Corona Virus.php');
            }

    }
}

/*  aboutcorona section edit start*/

if(isset($_POST['aboutcorona_section_updatebtn']))
{
    $aboutcorona_id = $_POST['aboutcorona_edit_id'];
    $aboutcorona_title = $_POST['edit_aboutcorona_title'];
    $aboutcorona_Description = $_POST['edit_aboutcorona_Description'];
    $aboutcorona_image = $_FILES["aboutcorona_image"]['name'];

    $queryaboutcorona_section = "UPDATE aboutcorona_section SET aboutcorona_title='$aboutcorona_title',aboutcorona_Description='$aboutcorona_Description', aboutcorona_image='$aboutcorona_image' WHERE aboutcorona_id='$aboutcorona_id' ";
    $query_runaboutcorona_section = mysqli_query($connection, $queryaboutcorona_section);

    if($query_runaboutcorona_section)
                   {
                move_uploaded_file($_FILES["aboutcorona_image"]["tmp_name"], "upload/".$_FILES["aboutcorona_image"]["name"]);
                $_SESSION['status'] = " Added";
                $_SESSION['status_code'] = "success";
                header('Location: home-About Corona Virus.php');
                  }
            else 
            {
                $_SESSION['status'] = " Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: home-About Corona Virus.php');
            }

}

/* about coronavirus section edit end*/

/*about coronavirus section delete start*/

if(isset($_POST['aboutcorona_delete_btn']))
{
    $aboutcorona_id = $_POST['aboutcorona_delete_id'];

    $queryaboutcorona_section = "DELETE FROM aboutcorona_section WHERE aboutcorona_id='$aboutcorona_id' ";
    $query_runaboutcorona_section = mysqli_query($connection, $queryaboutcorona_section);

    if($query_runaboutcorona_section)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: home-About Corona Virus.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: home-About Corona Virus.php'); 
    }    
}
/*about coronavirus section delete end*/

/*
=================================================================
                   about coronavirus section end
===============================================================
*/
/*
=================================================================
                  Home hero section start
===============================================================
*/
if(isset($_POST['save_hero_section']))
{
    $hero_sub_title = $_POST['hero_sub_title'];
    $hero_title = $_POST['hero_title'];
    $hero_title_span = $_POST['hero_title_span'];
    $hero_Description = $_POST['hero_Description'];
    $hero_Button = $_POST['hero_Button'];
    $hero_image = $_FILES["hero_image"]['name'];
    
/*   Home hero section table import from the database*/
if(file_exists("upload/".$_FILES["hero_image"]["name"]))
    {
        $store=$_FILES["hero_image"]["name"];
        $_SESSION['status']="image already exists.'.$store.' ";
         header('Location: home_hero_section.php');
    }
else{
        $queryhero_section = "INSERT INTO hero_section (`hero_sub_title`,`hero_title`,`hero_title_span`,`hero_Description`,`hero_Button`,`hero_image`)
         VALUES ('$hero_sub_title','$hero_title','$hero_title_span','$hero_Description','$hero_Button','$hero_image')";
        $query_runhero_section = mysqli_query($connection, $queryhero_section);

            if($query_runhero_section)
                   {
                move_uploaded_file($_FILES["hero_image"]["tmp_name"], "upload/".$_FILES["hero_image"]["name"]);
                $_SESSION['status'] = " Added";
                $_SESSION['status_code'] = "success";
                header('Location: home_hero_section.php');
                  }
            else 
            {
                $_SESSION['status'] = " Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: home_hero_section.php');
            }

    }
}

/*    Home hero section edit start*/

if(isset($_POST['hero_section_updatebtn']))
{
    $id = $_POST['hero_edit_id'];
    $hero_sub_title = $_POST['edit_hero_sub_title'];
    $hero_title = $_POST['edit_hero_title'];
    $hero_title_span = $_POST['edit_hero_title_span'];
    $hero_Description = $_POST['edit_hero_Description'];
    $hero_Button = $_POST['edit_hero_Button'];
    $hero_image = $_FILES["hero_image"]['name'];

    $queryhero_section = "UPDATE hero_section SET hero_sub_title='$hero_sub_title',hero_title='$hero_title',hero_title_span='$hero_title_span',hero_Description='$hero_Description', hero_Button='$hero_Button', hero_image='$hero_image' WHERE id='$id' ";
    $query_runhero_section = mysqli_query($connection, $queryhero_section);

    if($query_runhero_section)
                   {
                move_uploaded_file($_FILES["hero_image"]["tmp_name"], "upload/".$_FILES["hero_image"]["name"]);
                $_SESSION['status'] = " Added";
                $_SESSION['status_code'] = "success";
                header('Location: home_hero_section.php');
                  }
            else 
            {
                $_SESSION['status'] = " Not Added";
                $_SESSION['status_code'] = "error";
                header('Location: home_hero_section.php');
            }

}

/*   Home hero section edit end*/

/*  Home hero section delete start*/

if(isset($_POST['hero_delete_btn']))
{
    $id = $_POST['hero_delete_id'];

    $queryhero_section = "DELETE FROM hero_section WHERE id='$id' ";
    $query_runhero_section = mysqli_query($connection, $queryhero_section);

    if($query_runhero_section)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: home_hero_section.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: home_hero_section.php'); 
    }    
}
/*  Home hero section delete end*/

/*
=================================================================
                    Home hero section end
===============================================================
*/
/*
=================================================================
                  Home symtoms section start
===============================================================
*/
    if(isset($_POST['save_Symtoms_section']))
    {
        $Symtoms_Title = $_POST['Symtoms_Title'];
        $Symtoms_description = $_POST['Symtoms_description'];
        $Symtoms_Title_one = $_POST['Symtoms_Title_one'];
        $Symtoms_description_one = $_POST['Symtoms_description_one'];
        $Symtoms_Title_two = $_POST['Symtoms_Title_two'];
        $Symtoms_description_two = $_POST['Symtoms_description_two'];
        $Symtoms_Title_three = $_POST['Symtoms_Title_three'];
        $Symtoms_description_three = $_POST['Symtoms_description_three'];
        $Symtoms_image = $_FILES["Symtoms_image"]['name'];
        
    /*   Home symtoms section table import from the database*/
    if(file_exists("upload/".$_FILES["Symtoms_image"]["name"]))
        {
            $store=$_FILES["Symtoms_image"]["name"];
            $_SESSION['status']="image already exists.'.$store.' ";
            header('Location: home_Symtoms_section.php');
        }
    else{
            $querysymtoms_section = "INSERT INTO symtoms_section (`Symtoms_Title`,`Symtoms_description`,`Symtoms_Title_one`,`Symtoms_description_one`,`Symtoms_Title_two`,`Symtoms_description_two`,`Symtoms_Title_three`,`Symtoms_description_three`,`Symtoms_image`)
            VALUES ('$Symtoms_Title','$Symtoms_description','$Symtoms_Title_one','$Symtoms_description_one','$Symtoms_Title_two','$Symtoms_description_two','$Symtoms_Title_three','$Symtoms_description_three','$Symtoms_image')";
            $query_runsymtoms_section = mysqli_query($connection, $querysymtoms_section);

                if($query_runsymtoms_section)
                    {
                    move_uploaded_file($_FILES["Symtoms_image"]["tmp_name"], "upload/".$_FILES["Symtoms_image"]["name"]);
                    $_SESSION['status'] = " Added";
                    $_SESSION['status_code'] = "success";
                    header('Location: home_Symtoms_section.php');
                    }
                else 
                {
                    $_SESSION['status'] = " Not Added";
                    $_SESSION['status_code'] = "error";
                    header('Location: home_Symtoms_section.php');
                }

        }
    }

    /*    Home symtoms section edit start*/

    if(isset($_POST['Symtoms_section_updatebtn']))
    {
        $Symtoms_id = $_POST['Symtoms_edit_id'];
        $Symtoms_Title = $_POST['edit_Symtoms_title'];
        $Symtoms_description = $_POST['edit_Symtoms_description'];
        $Symtoms_Title_one = $_POST['edit_Symtoms_Title_one'];
        $Symtoms_description_one = $_POST['edit_Symtoms_description_one'];
        $Symtoms_Title_two = $_POST['edit_Symtoms_Title_two'];
        $Symtoms_description_two = $_POST['edit_Symtoms_description_two'];
        $Symtoms_Title_three = $_POST['edit_Symtoms_Title_three'];
        $Symtoms_description_three = $_POST['edit_Symtoms_description_three'];
        $Symtoms_image = $_FILES["Symtoms_image"]['name'];
        

        $querysymtoms_section = "UPDATE symtoms_section SET
                                Symtoms_Title='$Symtoms_Title',
                                Symtoms_description='$Symtoms_description',
                                Symtoms_Title_one='$Symtoms_Title_one',
                                Symtoms_description_one='$Symtoms_description_one',
                                Symtoms_Title_two='$Symtoms_Title_two',
                                Symtoms_description_two='$Symtoms_description_two',
                                Symtoms_Title_three='$Symtoms_Title_three',
                                Symtoms_description_three='$Symtoms_description_three',
                                Symtoms_image='$Symtoms_image' WHERE Symtoms_id='$Symtoms_id' ";
        $query_runsymtoms_section = mysqli_query($connection, $querysymtoms_section);

        if($query_runsymtoms_section)
                    {
                    move_uploaded_file($_FILES["Symtoms_image"]["tmp_name"], "upload/".$_FILES["Symtoms_image"]["name"]);
                    $_SESSION['status'] = " Added";
                    $_SESSION['status_code'] = "success";
                    header('Location: home_Symtoms_section.php');
                    }
                else 
                {
                    $_SESSION['status'] = " Not Added";
                    $_SESSION['status_code'] = "error";
                    header('Location: home_Symtoms_section.php');
                }

    }

    /*   Home symtoms section edit end*/

    /*  Home symtoms section delete start*/

    if(isset($_POST['symtoms_delete_btn']))
    {
        $Symtoms_id = $_POST['symtoms_delete_id'];

        $querysymtoms_section = "DELETE FROM symtoms_section WHERE Symtoms_id='$Symtoms_id'";
        $query_runsymtoms_section = mysqli_query($connection, $querysymtoms_section);

        if($query_runsymtoms_section)
        {
            $_SESSION['status'] = "Your Data is Deleted";
            $_SESSION['status_code'] = "success";
            header('Location:home_Symtoms_section.php'); 
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT DELETED";       
            $_SESSION['status_code'] = "error";
            header('Location:home_Symtoms_section.php'); 
        }    
    }
/*  Home symtoms section delete end*/

/*
=================================================================
                    Home symtoms section end
===============================================================
*/
/*
=================================================================
                  Home Avoid section start
===============================================================
*/
    if(isset($_POST['save_Avoid_section']))
    {
        $Avoid_Title = $_POST['Avoid_Title'];
        $Avoid_description = $_POST['Avoid_description'];
        $Avoid_span_1 = $_POST['Avoid_span_1'];
        $Avoid_span_2 = $_POST['Avoid_span_2'];
        $Avoid_span_3 = $_POST['Avoid_span_3'];
        $Avoid_span_4 = $_POST['Avoid_span_4'];
        $Avoid_image = $_FILES["Avoid_image"]['name'];
        
    /*   Home Avoid section table import from the database*/
    if(file_exists("upload/".$_FILES["Avoid_image"]["name"]))
        {
            $store=$_FILES["Avoid_image"]["name"];
            $_SESSION['status']="image already exists.'.$store.' ";
            header('Location: Avoid_home_section.php');
        }
    else{
            $queryAvoid_section = "INSERT INTO Avoid_section (`Avoid_Title`,`Avoid_description`,`Avoid_span_1`,`Avoid_span_2`,`Avoid_span_3`,`Avoid_span_4`,`Avoid_image`)
            VALUES ('$Avoid_Title','$Avoid_description','$Avoid_span_1','$Avoid_span_2','$Avoid_span_3','$Avoid_span_4','$Avoid_image')";
            $query_runAvoid_section = mysqli_query($connection, $queryAvoid_section);

                if($query_runAvoid_section)
                    {
                    move_uploaded_file($_FILES["Avoid_image"]["tmp_name"], "upload/".$_FILES["Avoid_image"]["name"]);
                    $_SESSION['status'] = " Added";
                    $_SESSION['status_code'] = "success";
                    header('Location: Avoid_home_section.php');
                    }
                else 
                {
                    $_SESSION['status'] = " Not Added";
                    $_SESSION['status_code'] = "error";
                    header('Location: Avoid_home_section.php');
                }

        }
    }

    /*    Home Avoid section edit start*/

    if(isset($_POST['Avoid_section_updatebtn']))
    {
        $Avoid_id = $_POST['avoid_edit_id'];
        $Avoid_Title = $_POST['edit_Avoid_Title'];
        $Avoid_description = $_POST['edit_Avoid_description'];
        $Avoid_span_1 = $_POST['edit_Avoid_span_1'];
        $Avoid_span_2 = $_POST['edit_Avoid_span_2'];
        $Avoid_span_3 = $_POST['edit_Avoid_span_3'];
        $Avoid_span_4 = $_POST['edit_Avoid_span_4'];
        $Avoid_image = $_FILES["Avoid_image"]['name'];
        

        $queryAvoid_section = "UPDATE Avoid_section SET
                                Avoid_Title='$Avoid_Title',
                                Avoid_description='$Avoid_description',
                                Avoid_span_1='$Avoid_span_1',
                                Avoid_span_2='$Avoid_span_2',
                                Avoid_span_3='$Avoid_span_3',
                                Avoid_span_4='$Avoid_span_4',
                                Avoid_image='$Avoid_image' WHERE Avoid_id='$Avoid_id' ";
        $query_runAvoid_section = mysqli_query($connection, $queryAvoid_section);

        if($query_runAvoid_section)
                    {
                    move_uploaded_file($_FILES["Avoid_image"]["tmp_name"], "upload/".$_FILES["Avoid_image"]["name"]);
                    $_SESSION['status'] = " Added";
                    $_SESSION['status_code'] = "success";
                    header('Location: Avoid_home_section.php');
                    }
                else 
                {
                    $_SESSION['status'] = " Not Added";
                    $_SESSION['status_code'] = "error";
                    header('Location: Avoid_home_section.php');
                }

    }

    /*   Home Avoid section edit end*/

    /*  Home Avoid section delete start*/

    if(isset($_POST['Avoid_delete_btn']))
    {
        $Avoid_id = $_POST['Avoid_delete_id'];

        $queryAvoid_section = "DELETE FROM Avoid_section WHERE Avoid_id='$Avoid_id'";
        $query_runAvoid_section = mysqli_query($connection, $queryAvoid_section);

        if($query_runAvoid_section)
        {
            $_SESSION['status'] = "Your Data is Deleted";
            $_SESSION['status_code'] = "success";
            header('Location:Avoid_home_section.php'); 
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT DELETED";       
            $_SESSION['status_code'] = "error";
            header('Location:Avoid_home_section.php'); 
        }    
    }
/*  Home Avoid section delete end*/

/*
=================================================================
                    Home Avoid section end
===============================================================
*/
?>