<?php
    class JobOpening
    {
        private $job_title;
        private $description;
        private $contact_name;
        private $contact_email;

        function __construct($job_title, $description, $contact_name, $contact_email)
        {
            $this->job_title = $job_title;
            $this->description = $description;
            $this->contact_name = $contact_name;
            $this->contact_email = $contact_email;
        }

        function setJobTitle($job_title)
        {
            $this->job_title = $job_title;
        }

        function getJobTitle()
        {
            return $this->job_title;
        }

        function setDescription($description)
        {
            $this->description = $description;
        }

        function getDescription()
        {
            return $this->description;
        }

        function setContactName($contact_name)
        {
            $this->contact_name = $contact_name;
        }

        function getContactName()
        {
            return $this->contact_name;
        }

        function setContactEmail($contact_email)
        {
            $this->contact_email = $contact_email;
        }

        function getContactEmail()
        {
            return $this->contact_email;
        }
    }


 ?>
