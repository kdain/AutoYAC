<?php
//this file is designed to be used as an include that is part of a loop.
//If a valid match is found, it should give $caller_id a value
//available variables for use are: $thenumber
//retreive website contents using get_url_contents($url);

//configuration / display parameters
//The description cannot contain "a" tags, but can contain limited HTML.
//Some HTML (like the a tags) will break the UI.

// AutoYAC depends on the scripts /bin/getlist (saves list of active YAC
// clients), /bin/bcid (reads the list and sends data to clients)

$source_desc = "This source will send the Caller ID info to an automatically ge


if($usage_mode == 'post processing')
{

        $yac_text = $first_caller_id.'~'.$thenumber;
        $command = "/bin/echo -e -n @CALL $yac_text | /bin/bcid ";
        shell_exec($command);


                if($debug)
                {
                        print 'Send to AutoYAC: '.$first_caller_id.''.$thenumbe



                }

}
?>

