<?php

/* TfEL PHP Media Manager Suite.

Written for Pedagogy & Leadership, in Teaching and Learning Services
at the Department for Education and Child Development by Aidan Cornelius-Bell.

This version was last revised: Wednesday, 28 May 2014.

Copyright (c) 2014 The Government of South Australia, All Rights Reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are met:
    * Redistributions of source code must retain the above copyright
      notice, this list of conditions and the following disclaimer.
    * Redistributions in binary form must reproduce the above copyright
      notice, this list of conditions and the following disclaimer in the
      documentation and/or other materials provided with the distribution.
    * Neither the name of the <organization> nor the
      names of its contributors may be used to endorse or promote products
      derived from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL <COPYRIGHT HOLDER> BE LIABLE FOR ANY
DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

This software may include GNU/GPL compatible software. Licenses are attached 
in the relevant locations, and relevant modifications retain their original
licensing and/or copyright where legally required.

*/


// Build a configuration array 
// NOTE: The whole app will crash and burn without this, 
//       so make sure you back it up if you're making changes!


// You don't need to edit this line.
$ApplicationConfiguration = array();

// You don't need to edit this line either, it doesn't generate any HTML elements.
$ApplicationConfiguration["ApplicationTitle"] = "media_manager";

// If you need to run a duplicate, ('spoke') of the frontend, specify that here.
// Options are: "master" - main application frontend, expects the backend to be local
//              "spoke" - main or seccondary frontend, expects the backend to be remote
//              "development" - dummy frontend, does not expect a backend at all
$ApplicationConfiguration["ApplicationType"] = "master";

// You will definitely need to edit this line if you're migrating servers - set to localhost if in development
$ApplicationConfiguration["LocalHostname"] = "localhost";

// Database Configuration - this is usually just the 'local' directory structure, shouldn't need to change it!
$ApplicationConfiguration["LiteDatabaseFile"] = "./MediaManagerSQLite";

// Filesystem Configuration - You'll probably need to change this if you move servers, or at least create the paths here.
$ApplicationConfiguration["FileDatabaseTemp"] = "./tmp";
$ApplicationConfiguration["FileDatabaseFinalData"] = "/Library/WebServer/share/media";
$ApplicationConfiguration["FileDatabaseTrash"] = $ApplicationConfiguration["FileDatabaseFinalData"] . "/.trash";

// System Configuration - You'll definitely need to change this if you move servers!
// You need a system account with 'wheel' grouping and pw-free sudo, it doesn't need a shell (beside ./handbrake) though :)
$ApplicationConfiguration["SystemMediaEncodingUsername"] = "mediaencoder";
$ApplicationConfiguration["SystemMediaEncodingPassword"] = "f41s32vf29p.d194wc,31!234abqancsd4e3i";
$ApplicationConfiguration["SystemMediaEncodingRootCommand"] = "sudo -i";

$ApplicationConfiguration["SystemMediaEncodingPathToHandbrakeCLI"] = "/Applications/HandBrake.app/Contents/MacOS/HandBrake";
