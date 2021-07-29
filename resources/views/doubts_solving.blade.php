<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome PUBLIC!</title>
    <link rel="stylesheet" href="{{ asset('css/twapp.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div>
        <div class="">
            <div class="bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500  h-2 w-full"></div>
        </div>

        <div class="">
            <div class="bg-gray-200 h-20 w-full">

                <div class="flex justify-center">
                    <img src="https://digitalindia.gov.in/writereaddata/files/Headerlogo_0.png">
                </div>

            </div>
        </div>
        <div class="">
            <div class="bg-gray-300 h-20 w-full  border-black border-b-2">
                <div class="flex justify-evenly  pt-4">
                    <div>
                        <a href="https://msegs.mizoram.gov.in/">
                            <img class="w-28 h-14 pb-2" src="https://msegs.mizoram.gov.in/uploads/attachments/1bb87d41d15fe27b500a4bfcde01bb0e/logo.png">
                        </a>
                    </div>
                    <div>
                        <a href="https://ecounselling.nic.in/">
                            <img class="w-28 pt-1" src="https://ecounselling.nic.in/images/e-counsellig-logo_right.png">
                        </a>
                    </div>
                    <div>
                        <a href="https://www.india.gov.in/">
                            <img class="w-28 h-12" src="data:image/png;base64,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">
                        </a>
                    </div>
                    <div>
                        <a href="https://mizoram.gov.in/">
                            <img class="w-28 h-12" src="https://assets.mizoram.gov.in/senhri/public/ssdg.jpg">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div>
                <h1></h1>
            </div>


        </nav>
        <div class="px-7">
            <!-- Form will go here -->
            <div class="md:grid grid-cols-3 gap-2">
                <div class=" mb-4">
                    <div class="bg-gray-200 auto w-full ">
                        <div class="bg-black text-white p-2 mb-2">
                            Admin
                        </div>
                        <nav class="text-center">
                            <div>
                                <a href="/login" type="button" class="btn btn-dark w-full block mb-1">Kiosk Operator Login</a>
                            </div>
                            <div>
                                <a href="/login" type="button" class="btn btn-secondary w-full block mb-1">Settlement Officer Login</a>
                            </div>
                            <div>
                                <a href="/login" type="button" class="btn btn-success w-full block mb-1">Survey Officer Login</a>
                            </div>
                            <div>
                                <a href="/login" type="button" class="btn btn-danger w-full block mb-1">Surveyor Login</a>
                            </div>
                            <div>
                                <a href="/login" type="button" class="btn btn-warning w-full block mb-1">Section Clerk Login</a>
                            </div>
                            <div>
                                <a href="#" type="button" class="btn btn-info w-full block mb-1">About Us</a>
                            </div>

                        </nav>
                        <div class="mt-3 pl-2">
                            Contact : 0389 2319637<br>
                            Fax : 0389 2319632 <br>
                            e-Mail : <a href="https://mizoram.gov.in/" target="_blank">support.msegs@mizoram.gov.in</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div class="bg-gray-200 auto w-full"></div>


                    </div>


                </div>
                <div class=" mb-4">
                    <div class=" h-auto w-full">
                        <h1 class="font-bold border-b-2">
                            Introduction
                        </h1>
                        <p class="p-2">
                            Mizoram State e-Governance Society (MSEGS) was established in 2005 and is registered under the Society Registration Act, XXI of 1860. The primary objective of the Society is to administer the implementation of e-Governance projects for the overall benefit of the citizens and public by setting up the necessary administrative, financial, legal and technical framework, implementation mechanism and resources in the State of Mizoram.
                        </p>

                    </div>
                    <div class="mt-2">
                        <a href="/application/create" type="button" class="btn btn-primary w-full">Fill Application</a>
                    </div>

                </div>
                <div class="">
                    <div class="bg-gray-200 h-40 w-full">
                        <div class="bg-black text-white p-2">
                            New & Events
                        </div>

                    </div>

                </div>


            </div>
        </div>
    </div>
    <footer class="bg-gray-800 p-20 text-center text-white mt-5">

        <nav class="pb-2">
            |<a href="" class="pl-2 pr-2">FAQs</a>
            |
            <a href="" class="pr-2 pl-2">Policies</a>|
        </nav>
        Copyright 2021 ICT
    </footer>
</body>

</html>