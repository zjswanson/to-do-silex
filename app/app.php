<?php
    date_default_timezone_set('America/Los_Angeles');

    require_once __DIR__ . '/../vendor/autoload.php';
    require_once __DIR__ . '/../src/JobOpening.php';

    $app = new Silex\Application();

    $app->get('/', function() {
        return 'Sample root page';
    });

    $app->get('/new_opening', function() {
        return "
        <!DOCTYPE html>
        <html>
            <head>
                <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
                <meta charset='utf-8'>
                <title></title>
            </head>
            <body>
                <div class='container'>
                    <form action='/view_opening'>
                        <div class='form-group'>
                            <label for='job-title'>Enter Job Title</label>
                            <input type='text' name='job-title'>
                        </div>
                        <div class='form-group'>
                            <label for='description'>Enter Job Description</label>
                            <input type='text' name='description'>
                        </div>
                        <div class='form-group'>
                            <label for='contact-name'>Enter contact Name for hiring manager</label>
                            <input type='text' name='contact-name'>
                        </div>
                        <div class='form-group'>
                            <label for='contact-email'>Enter Contact Email for hiring manager</label>
                            <input type='text' name='contact-email'>
                        </div>
                        <button type='submit' name='button'>Enter your Job!</button>
                    </form>
                </div>
            </body>
        </html>
        ";
    });

    $app->get('/view_opening', function() {
        $title = $_GET["job-title"];
        $description = $_GET["description"];
        $contact_name = $_GET["contact-name"];
        $contact_email = $_GET["contact-email"];

        $job = new JobOpening($title, $description, $contact_name, $contact_email);

        return "
            <!DOCTYPE html>
            <html>
                <head>
                    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
                    <title>Your new job opening</title>
                </head>
                <body>
                    <div class='container'>
                        <ul>
                            <li>" . $job->getJobTitle() . "</li>
                            <li>" . $job->getDescription() . "</li>
                            <li>" . $job->getContactName() . "</li>
                            <li>" . $job->getContactEmail() . "</li>
                        </ul>
                    </div>
                </body>
            </html>
        ";
    });


    return $app;
?>
