@extends('admin.default')

@section('page-header')
    Users <small>{{ trans('app.manage') }}</small>
@endsection

@section('content')
    <link rel="stylesheet" href="https://cdn.firebase.com/libs/firechat/3.0.1/firechat.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <!-- Firebase -->
    <script src="https://www.gstatic.com/firebasejs/3.3.0/firebase.js"></script>
    <script src="https://cdn.firebase.com/libs/firechat/3.0.1/firechat.min.js"></script>
    <script>
        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyCDGOGqaw91e13qXDlLb7Defq4xjRJj92g",
            authDomain: "firechat-demo-1f4dd.firebaseapp.com",
            databaseURL: "https://firechat-demo-1f4dd.firebaseio.com",
            projectId: "firechat-demo-1f4dd",
            storageBucket: "firechat-demo-1f4dd.appspot.com",
            messagingSenderId: "810648248695"
        };

        firebase.initializeApp(config);
        function login() {
            // Log the user in via Twitter

            firebase.auth().signInWithCustomToken('{{ (string)$firebaseToken }}').catch(function(error) {
                console.log("Error authenticating user:", error);
            });
        }

        firebase.auth().onAuthStateChanged(function(user) {
            // Once authenticated, instantiate Firechat with the logged in user
            if (user) {
                user.updateProfile({
                    displayName: "{{ auth()->user()->name }}",
                    email: "{{ auth()->user()->email }}"
                });
                initChat(user);
            }
        });

        function initChat(user) {
            // Get a Firebase Database ref
            var chatRef = firebase.database().ref("chat");

            // Create a Firechat instance
            var chat = new FirechatUI(chatRef, document.getElementById("firechat-wrapper"));

            // Set the Firechat user
            chat.setUser(user.uid, user.displayName);
        }
    </script>

    <div id="firechat-wrapper">

    </div>

    <style>
        #firechat-header {
            display: none;
        }

        #firechat-tab-content .icon.close.right {
            display: none;
        }

        #firechat-tab-content .tab-pane-menu {
            display: none;
        }
    </style>

@endsection
