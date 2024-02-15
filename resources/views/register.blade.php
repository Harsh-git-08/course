<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('/assets/css/register.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/loader.css')}}">



</head>
<style>

</style>

<body>
    <div class="cursor"></div>
    <div class="cursor2"></div>
    
    <div class="loader-wrapper">
        <div class="box">
            <svg xmlns="http://www.w3.org/2000/svg" width="512" height="278" viewBox="0 0 512 278">
                <g id="wolf" fill="#000000" fill-rule="evenodd">
                    <path class="frame" id="frame-01"
                        d="M113.3 41.3l-4.8 3.4-4.9 2.8-1.1 3.6-.1 4.9-2.3 3.6L94 65l-6.4 6-7.4 6-5.4 5.5-2.8 2.8 3.5 4.9 8.2 5.7 5.2 1.7 3 3.7 3.7 1.3 7.7-2 9.7-3.6 10.2-2.7 5.8.7 2.2 4.7 2.5 5.3-2.4 13 4.1-2-3.2 12.6 4.4-3.5-4.4 17.4 7.3-3.9-5.3 7.5 10-1.3 3.5 9.6 7.3 7.9 8.6 6.5 9.4 2.2 2.3 5.4-.2 13.8 2.5 16.5 1.8 19.6.8 7.5 5.8 4.3 9.6 1 9.5 1.7 10.8 3.4 6 1 1.2 3-3 2.8-4.9 1.7-4.8-.3-5-1.2-6-5.2-3.8 3-5.4 7.2-4 5.8-.3 2.4 1 3 3.8-.9 4.5 1.6 3.2-.7 5.3 2 6.6 1.2 7.8-.9 6.6-1.8 7-8 5.7-4.6 5-5.2 5-1.4 6.7-5.1 4.8-.3 5.2-2.6 3.6-2.4 5.5.2 2.2-4.7 8.7-3.2 5-1.3 10.4-.7 8.6.6 7.3-2 3.9-.5 4.7-5.6h-3.4l-.8-4.1-4.6-3.2-3.4-2.3-4.4-2.7H303l-4.6-6.2-5-9.3-.9-8.3 5.6-8.4 4.7 2.8.8-6 14.4 5-4-8.5 20-2.9-2.5-3.8 4-.6.4-5.2 2.5-.6 2.7-4.3 9.8-2.2-1-3.7 8.4-1.8 9.8 3 10.5 4 14.2 2-10.2-7.2 15-1.6 7-3.3-9.7-4 11.9-1.5 11-5 8.7-8 6.9-10 8.5-19.5 3.8-12.8 1.4-9.2-2.2-8-4.1-4.2 1.2-7-6-1-5 2.2-9.3 5.8 7.1-7.8-6.1 2.4-5 3.6-5 4-6.3 8.6-9.5 9.5-7.5 6.4-9.5 4-14.6 3.1-14.5.8-12.7-1-14.1-2-10.1-3.3-8.9-5.5-7-.6 7.4-3.6-6.3.2-5.8 1-7.8 2.7-12.2 3.2-14.1 3.5-11.8-.5-15.9-1.4-13.5-4-13.6-4.8 2.8-2.2-13.6-2.4 9.7-9.8-17.5-1.5 3.4-3.8-11.4-2.3 10.5-2.3-18.7-3.5 11-4-20-5.6-6.2-8-6.3-8.2-6.7-5.8-5.9-5.2-6-9.4-3.8-4.1-1.7 2.7-1 10.2.5 8-3.6-2.1-4.2-5.4-2-2.2-1.3 4.6 1.2 7 3.7 9.5 1.2 4.1-5.2 4.9zm92.6 151.3l-3.5 6.9-5.2 9.5-4.3 8.7-.2 3 4.7 3.7 7.2-1.1 8.8-1.1 2.2-2.1 7 .3 4.9 2.4 5.6 3.7 5.6 1.5 4-2.3 3.7-10.2-7.9-4.4-12-5.9-10.2-6-10.4-6.6zm28-17.9l3.5 3.9 1.6 3.4 4.5 8 6.7 6.9 1.7-7.7-3.4-6.9.7-8.9 3.7-10-7.4 4.4-6.2 4-5.4 2.9z" />
                    <polygon class="frame" id="frame-02"
                        points="112.511 53.533 104.157 58.791 102.938 62.939 103.077 67.615 101.276 71.823 93.316 80.131 85.756 86.296 76.498 94.047 73.889 98.213 78.58 102.258 84.869 106.713 89.748 108.732 93.908 108.882 92.859 111.372 98.019 114.375 102.188 116.261 109.177 112.841 116.014 108.019 122.173 105.99 128.119 106.147 132.369 110.908 136.313 118.433 136.089 127.236 133.898 134.835 131.521 138.923 136.881 140.895 141.842 141.238 143.476 141.776 140.895 143.718 136.558 144.837 134.194 145.975 141.144 149.938 145.779 152.579 148.406 154.479 145.035 155.941 150.826 159.308 154.272 163.364 165.222 171.022 161.133 175.847 155.733 181.745 148.196 188.859 142.352 195.017 136.642 200.601 132.366 206.245 130.333 210.225 130.982 215.983 134.945 222.479 141.103 228.806 148.444 238.149 154.382 245.838 159.211 250.686 165.122 251.864 173.264 251.776 176.014 251.763 175.141 243.796 171.312 241.201 170.552 235.542 165.654 231.861 158.529 226.955 154.225 222.916 149.456 217.823 148.403 210.616 152.112 205.805 159.663 201.487 167.26 198.857 175.211 195.442 182.934 192.885 189.773 192.847 190.492 200.704 192.771 212.622 194.402 221.376 196.775 227.202 202.08 228.317 212.131 228.703 221.913 230.679 234.33 233.667 243.262 235.176 250.504 234.92 256.092 230.202 258.02 226.295 257.494 222.514 254.306 219.528 249.945 218.018 245.031 216.306 242.156 216.377 236.763 216.248 229.902 216.285 224.29 216.767 216.742 216.299 210.125 213.738 208.654 209.136 211.014 203.744 218.02 194.404 221.647 188.067 226.045 182.742 230.342 176.84 229.254 173.844 233.446 173.069 239.731 170.556 246.442 167.943 252.858 164.681 258.11 163.212 262.083 163.019 262.207 169.837 261.632 176.442 263.765 188.408 266.122 198.968 270.386 213.026 273.375 226.81 274.086 234.718 272.725 241.128 269.478 245.705 264.646 251.234 258.305 254.308 253.281 258.003 246.179 259.573 242.655 257.756 238.312 257.225 234.184 260.154 229.658 265.181 226.08 270.202 225.589 273.236 230.536 274.208 234.954 274.84 236.751 276.197 237.953 277.157 251.274 277.157 255.525 274.813 259.186 274.735 266.021 269.779 273.256 262.04 279.74 255.004 285.457 249.118 290.838 243.587 296.149 239.913 296.479 234.25 293.547 227.709 290.324 219.332 288.428 212.654 287.251 205.986 288.821 204.448 293.183 207.312 303.214 215.631 310.599 222.795 314.33 226.863 313.62 241.971 310.842 251.437 306.904 259.891 303.693 262.406 298.3 262.385 293.41 260.484 288.245 264.264 285.983 268.078 283.549 273.342 282.054 276.568 305.411 276.568 311.012 274.628 315.369 272.88 319.771 270.054 323.276 263.296 324.726 255.384 326.098 246.397 328.039 238.4 329.177 225.811 329.493 217.094 329.581 211.4 324.35 208.613 314.98 203.946 308.302 199.123 307.044 194.786 310.642 188.475 313.977 186.006 318.553 185.609 322.429 187.7 322.806 180.803 326.558 183.906 330.467 185.16 331.398 179.137 332.679 173.716 339.101 176.092 339.468 161.166 343.399 167.458 342.841 152.097 347.828 160.234 346.224 144.437 352.82 153.77 367.245 157.548 375.496 156.417 367.387 151.067 379.181 152.333 385.365 153.187 395.549 152.484 400.748 151.264 393.701 148.028 401.357 145.778 409.04 142.205 415.637 139.298 421.04 134.614 428.888 128.131 431.36 125.097 437.825 116.281 431.089 118.995 439.676 110.372 432.518 112.876 438.332 107.276 439.706 103.817 439.506 97.12 438.481 89.032 435.893 80.855 431.836 70.569 428.19 66.199 423.805 62.856 422.55 57.491 420.791 51.053 416.374 54.325 411.284 57.81 407.596 62.243 412.789 52.908 407.934 56.349 405.007 59.838 401.415 64.326 396.28 70.29 390.616 78.668 383.064 87.456 374.478 93.993 364.943 99.83 361.735 102.144 354.521 102.936 345.457 103.999 336.792 105.005 330.658 107.153 324.453 104.014 313.7 99.575 305.535 98.066 297.063 95.246 286.024 94.068 275.581 94.193 266.74 94.121 255.979 94.197 247.737 93.521 233.731 92.243 219.275 89.734 212.25 87.054 202.411 82.906 197.763 79.571 203.232 78.103 193.274 76.057 198.045 72.017 191.239 71.942 196.555 65.061 186.597 67.754 190.835 63.111 177.989 61.919 183.471 59.515 171.486 58.545 184.438 51.181 160.482 50.7 164.624 46.895 154.433 47.006 152.607 42.651 149.239 36.899 143.731 29.278 135.771 22.122 128.623 16.59 126.3 14.743 125.008 21.775 123.482 31.578 122.516 40.982 122.757 43.429 120.749 41.551 116.84 39.391 113.409 36.059 110.498 32.118 111.727 39.523 113.528 45.73 115.617 50.731" />
                    <polygon class="frame" id="frame-03"
                        points="103.688 58.563 95.207 62.522 93.202 69.49 91.925 75.605 84.683 80.389 74.833 87.437 66.487 92.628 59.754 99.959 63.269 103.927 68.182 106.237 72.774 109.793 77.22 112.461 80.204 112.064 82.909 115.471 87.004 118.332 93.388 114.837 99.538 111.431 109.507 109.017 116.14 108.891 123.824 113.209 133.283 117.592 136.937 120.455 136.68 127.363 138.799 136.27 142.416 128.036 143.478 135.379 147.444 145.368 150.211 137.089 149.468 145.899 152.381 152.506 152.579 159.871 146.586 162.56 135.436 167.261 125.359 170.998 114.964 177.68 102.924 184.39 95.939 191.996 86.612 199.999 76.147 205.967 69.442 210.264 66.481 214.506 64.693 220.006 63.616 225.135 66.347 226.432 72.425 228.505 77 228.881 83.224 227.124 87.276 225.387 90.842 224.25 96.89 216.301 101.486 211.249 104.949 208.293 107.895 200.964 114.763 195.694 121.564 191.838 131.657 187.196 142.99 185.628 148.359 184.987 143.513 190.722 135.554 197.568 132.93 201.868 136.032 204.862 143.188 210.098 150.476 216.014 160.945 221.285 171.283 227.024 181.136 232.451 187.979 231.754 196.562 232.792 200.683 230.484 203.03 225.671 203.552 221.53 199.943 219.074 197.187 216.381 192.543 214.576 187.393 213.49 182.422 209.209 175.539 206.915 168.511 205.956 163.873 205.097 156.748 197.775 167.056 195.206 179.128 192.798 187.705 190.347 197.423 187.879 206.115 184.665 204.104 179.319 204.285 176.389 210.269 175.735 222.604 174.438 229.84 170.979 225.851 168.403 234.048 165.965 243.923 162.759 261.571 158.214 272.608 155.172 280.362 155.351 288.016 157.872 292.339 160.726 295.413 166.23 300.113 172.471 304.727 179.835 313.842 191.347 318.622 196.144 326.704 201.57 335.786 209.072 346.216 216.354 351.588 220.962 352.458 228.692 351.83 238.249 347.598 247.439 344.753 252.977 340.892 256.829 338.125 259.951 334.897 261.69 331.488 260.72 326.228 258.397 322.541 261.193 319.807 265.969 318.36 270.611 318.813 277.115 348.125 277.115 351.871 275.66 355.099 268.713 359.482 262.063 363.37 255.099 367.348 244.609 368.961 236.468 371.024 229.095 371.906 221.964 371.767 210.329 368.876 207.618 365.779 203.976 372.221 205.536 376.224 207.206 383.896 211.602 392.188 221.454 398.775 239.273 400.124 251.29 397.902 261.974 389.892 263.708 385.292 265.154 381.639 267.008 378.79 272.795 379.158 277.299 402.981 277.299 407.649 275.123 410.624 272.004 411.271 266.869 414.954 261.572 416.519 255.623 416.213 249.301 414.09 238.191 412.243 226.515 410.543 217.85 409.716 209.416 406.521 202.417 403.019 199.971 395.696 198.931 385.666 195.491 375.813 189.939 368.01 184.905 360.624 177.251 358.443 165.236 357.966 155.65 357.804 150.999 357.643 144.203 365.052 152.783 374.327 163.585 379.483 166.704 377.764 158.37 387.402 164.784 398.401 166.075 393.73 160.66 403.648 163.027 415.352 162.951 425.402 160.53 429.067 158.32 419.68 155.583 425.524 153.515 434.548 148.587 437.144 144.687 430.071 144.764 438.684 139.553 445.825 132.395 442.052 130.594 447.58 125.293 451.223 117.398 454.452 107.685 455.905 99.256 455.81 94.111 450.733 100.224 452.47 94.668 452.027 85.386 448.306 88.628 449.924 77.618 447.348 68.26 445.825 75.475 441.896 68.688 433.538 62.443 415.11 55.755 406.81 54.239 397.525 54.023 389.657 53.908 393.189 62.679 385.195 53.788 385.62 57.479 388.212 61.219 394.016 68.942 398.18 79.633 397.473 87.445 394.241 94.572 389.709 100.307 381.464 105.228 375.506 107.012 365.792 109.183 359.224 109.56 346.322 104.204 336.71 96.875 326.143 91.611 316.07 88.927 306.914 86.246 297.167 84.28 286.821 81.862 278.33 81.423 264.854 80.498 250.448 79.769 232.835 78.926 215.673 76.693 211.724 75.317 205.485 72.453 200.107 71.289 204.446 69.373 193.13 67.369 201.697 63.629 183.348 61.899 189.312 54.611 178.963 56.788 187.009 50.428 175.086 51.739 162.018 50.58 156.173 50.303 162.224 46.587 156.859 46.58 151.392 48.154 149.106 49.09 147.68 40.959 147.636 35.136 146.963 26.916 145.622 22.365 141.657 21.859 137.095 26.281 132.892 31.674 127.521 37.092 127.551 30.664 125.336 30.169 122.727 33.685 118.662 38.787 112.402 47.352 107.315 53.393" />
                    <polygon class="frame" id="frame-04"
                        points="93.039 79.658 82.034 85.043 78.591 89.524 76.826 95.344 72.979 100.17 61.366 107.933 51.195 113.223 44.022 118.083 38.232 123.434 42.645 128.326 47.033 131.334 53.087 134.727 58.543 136.292 60.103 139.829 64.958 140.848 76.737 136.444 88.145 133.384 101.254 131.459 111.795 133.054 115.696 134.729 118.201 136.959 118.781 144.12 120.527 145.962 123.524 140.4 127.362 136.368 126.894 144.574 129.975 150.099 130.771 145.628 132.086 141.343 134.131 145.238 138.344 149.183 142.225 150.596 142.47 160.953 136.641 164.871 125.538 169.744 116.876 172.916 106.378 177.893 96.576 183.588 87.43 189.257 76.439 194.182 65.43 199.555 54.648 204.714 44.07 207.956 35.364 208.517 26.41 212.381 21.808 217.444 18.405 224.763 18.672 227.629 25.848 229.474 30.348 231.283 35.687 230.164 38.165 229.75 42.035 232.297 46.544 230.663 52.726 231.006 56.842 232.261 62.821 232.04 65.436 231.333 68.395 230.875 72.224 229.286 77.083 228.818 82.143 224.173 89.606 217.082 100.463 208.391 109.528 202.354 115.494 199.772 122.746 198.468 134.487 198.465 150.054 198.611 161.81 198.617 168.691 197.77 172.189 197.757 179.569 199.631 180.287 192.752 184.825 198.123 184.1 186.482 188.236 178.648 191.357 175.921 196.552 179.668 203.861 182.698 203.16 179.411 209.766 180.007 210.824 176.802 223.232 177.344 235.835 175.836 247.765 172.131 258.444 168.145 265.639 164.967 277.787 163.292 287.306 162.165 296.688 162.066 303.722 162.656 311.835 169.75 322.285 177.441 333.784 187.401 342.135 193.133 355.995 198.306 371.323 203.53 383.699 206.42 393.853 210.692 403.725 218.633 409.836 227.581 415.006 237.7 420.718 248.867 425.938 257.677 427.662 261.356 432.476 263.778 440.143 265.763 446.103 267.812 446.353 264.753 446.2 258.578 445.29 254.385 443.282 252.608 442.895 247.132 441.596 241.705 438.605 239 435.57 236.278 433.013 229.987 429.347 227.247 423.295 220.602 419.754 215.664 417.199 207.536 413.885 201.301 407.605 197.475 400.98 197.546 390.468 195.681 382.692 191.347 376.394 184.73 375.344 181.457 384.011 179.625 395.289 177.573 401.035 176.585 409.069 178.761 407.437 174.54 418.018 175.718 421.463 179.65 428.883 190.88 437.921 202.605 445.978 211.909 453.49 218.202 461.637 221.325 470.066 222.231 477.958 222.203 484.257 219.532 489.614 215.138 488.555 212.239 484.509 211.939 481.405 208.909 476.522 206.072 472.084 206.173 466.774 206.96 461.229 202.798 457.771 197.335 453.331 193.591 447.045 188.22 441.273 181.525 435.781 173.284 434.16 170.487 437.317 168.796 440.819 169.602 438.463 164.12 443.685 164.624 445.187 162.352 451.184 158.971 463.706 155.116 475.62 148.134 481.941 143.834 486.678 138.686 479.298 137.64 489.836 132.257 497.002 127.039 505.055 119.486 497.387 119.317 506.183 112.599 509.939 100.725 511.477 91.658 511.593 84.866 509.751 77.867 498.263 86.77 503.776 78.369 495.649 81.861 488.403 84.815 478.131 89.849 468.355 93.775 459.788 98.153 455.969 99.184 452.635 101.033 446.721 105.657 451.416 96.877 439 104.098 429.157 110.019 419.814 115.253 404.074 122.426 390.259 121.75 383.005 121.197 375.993 117.791 363.538 115.992 354.542 113.815 344.785 105.893 331.817 101.215 312.523 98.87 292.082 96.096 278.542 94.643 264.145 93.078 243.96 90.647 229.876 88.67 219.933 86.93 206.584 83.954 199.936 81.43 201.889 78.043 187.095 79.139 196.705 74.069 173.666 74.216 178.845 67.248 160.087 71.241 153.078 72.573 157.577 66.708 149.346 70.294 151.408 62.496 151.631 56.366 151.223 53.595 144.272 56.974 137.863 60.509 127.808 64.595 116.939 69.161 108.811 73.226 102.838 73.895 98.245 77.137" />
                    <polygon class="frame" id="frame-05"
                        points="94.952 85.651 85.46 89.328 77.166 93.399 74.919 97.279 74.038 105.331 65.603 110.915 56.135 116.135 47.772 121.035 42.124 124.378 35.227 132.079 41.502 138.106 48.319 142.832 54.319 144.656 56.922 147.868 61.241 151.873 68.438 149.689 85.188 144.698 98.8 141.438 110.27 143.103 119.766 143.875 118.013 153.978 126.328 148.348 125.209 157.173 126.068 161.04 128.981 158.06 130.398 161.923 128.28 166.312 122.945 171.524 112.487 175.045 100.546 179.244 92.85 179.452 86.915 182.643 76.233 186.492 61.569 191.619 46.681 195.886 36.991 200.064 22.497 201.455 17.363 200.414 14.018 199.49 4.853 203.434 0 209.65 1.029 213.705 6.559 216.43 10.961 216.922 13.45 220.313 18.849 222.088 24.978 220.201 33.044 220.025 40.157 217.959 49.309 215.212 55.414 213.991 66.103 209.842 77.144 204.758 87.859 202.923 97.573 201.544 83.137 216.115 67.849 228.01 59.117 234.549 54.997 239.945 48.269 244.931 39.644 250.41 34.428 250.367 29.602 255.776 26.766 259.409 30.245 263.461 36.745 265.265 42.093 264.77 43.105 266.888 46.674 266.798 53.134 265.713 62.066 261.184 68.332 254.014 71.911 248.553 77.952 245.944 85.304 241.323 91.44 233.503 99.04 224.581 112.51 217.964 125.362 212.607 133.989 209.635 144.439 205.096 152.903 200.958 160.702 202.398 165.562 204.407 167.691 191.076 172.963 197.997 175.201 188.924 182.912 192.91 182.835 188.669 191.405 188.125 203.03 183.559 217.232 178.362 233.673 171.193 245.411 163.948 261.112 153.118 270.066 147.403 281.488 145.17 292.98 145.398 303.695 153.061 318.365 164.798 332.133 173.543 339.432 177.218 345.96 179.499 342.874 173.81 350.85 176.705 357.19 175.137 362.586 172.657 366.779 168.502 370.862 172.769 375.012 181.333 381.567 191.898 389.819 194.943 397.071 195.17 401.172 192.866 401.541 186.545 398.728 180.261 394.355 175.212 393.121 169.997 387.121 162.878 384.254 157.531 389.174 156.266 393.496 157.403 399.461 161.198 403.25 162.525 407.376 162.424 412.627 168.423 418.429 176.361 427.334 180.282 436.879 180.401 442.018 178.416 442.073 172.501 439.222 166.784 436.664 163.555 444.481 163.855 440.883 159.597 449.554 159.799 447.386 154.513 454.595 147.629 455.977 140.711 449.672 144.948 453.6 134.593 455.273 127.645 456.004 118.358 455.437 110.555 453.062 102.052 442.511 107.092 450.117 98.67 443.785 100.822 437.589 105.86 429.817 110.735 421.855 111.463 417.17 111.234 407.665 109.421 397.442 104.491 390.43 100.841 378.72 94.994 368.577 91.019 358.512 88.233 350.831 87.488 357.552 82.936 352.623 82.151 343.233 86.071 347.978 78.766 341.632 80.132 336.379 84.943 331.764 86.649 323.874 84.76 311.568 81.255 300.004 79.418 287.382 79.347 273.484 80.261 255.713 82.35 239.57 84.372 225.451 86.746 212.875 87.492 202.587 86.6 192.028 84.593 201.424 81.301 198.499 79.707 184.831 79.458 194.887 74.695 189.954 72.924 182.167 74.072 170.509 74.888 181.503 70.406 172.609 67.843 161.407 70.898 154.687 73.101 148.991 74.06 155.523 68.693 145.154 72.442 140.135 73.386 137.691 72.485 138.652 65.576 139.379 61.554 138.002 59.249 132.512 62.079 125.301 66.149 117.339 71.543 109.05 78.378 102.828 81.649" />
                    <polygon class="frame" id="frame-06"
                        points="75.131 103.419 70.115 109.136 66.743 116.103 59.218 119.951 50.133 124.266 39.1 129.443 30.993 132.1 30.017 136.138 33.414 139.99 39.186 145.58 43.197 149.388 46.76 150.046 47.171 152.404 49.233 154.62 53.233 157.799 66.997 154.996 84.556 153.876 104.406 155.541 111.725 158.944 116.859 170.887 117.937 161.34 122.823 167.426 123.818 177.74 126.981 173.718 129.237 184.139 129.61 195.632 126.588 204.831 120.538 216.973 116.347 225.598 112.801 235.025 106.084 246.724 98.168 253.988 91.46 258.513 88.259 260.509 84.511 258.722 81.872 260.35 78.375 263.638 75.639 268.391 73.027 274.176 72.215 276.301 81.791 276.628 93.33 276.482 102.097 276.408 106.53 274.666 111.652 265.99 116.712 259.743 123.881 254.444 127.367 246.788 134.334 234.823 141.711 224.032 143.994 234.083 144.199 247.874 141.187 255.586 136.285 259.929 132.017 258.963 126.805 256.483 122.489 260.197 117.211 264.59 114.118 268.842 112.907 273.827 119.247 275.106 123.809 275.125 131.714 275.334 141.369 275.474 148.575 273.523 151.031 267.264 157.096 259.155 161.551 252.993 164.536 249.677 163.202 235.504 162 221.956 160.3 207.727 163.82 205.53 170.155 205.77 170.27 192.359 176.873 201.087 179.068 190.845 188.413 192.556 187.828 187.555 197.908 190.291 203.775 187.799 214.2 188.988 210.655 183.556 217.879 182.276 225.987 177.043 228.854 173.988 228.491 177.302 231.468 180.403 237.397 180.311 241.42 177.89 247.634 177.695 251.393 174.76 255.717 175.401 260.229 172.639 264.501 168.344 269.606 165.206 275.818 163.766 280.446 162.307 283.012 165.725 287.92 168.002 293.71 169.968 304.21 169.565 317.098 165.654 331.156 161.495 337.881 159.958 341.003 160.57 340.405 165.273 334.778 176.981 332.092 183.474 326.654 196.005 324.485 206.419 328.85 213.404 331.962 216.895 336.359 215.148 338.417 211.574 343.681 208.863 346.535 204.153 345.948 196.765 349.139 191.153 351.422 185.137 352.304 178.834 355.262 167.288 358.664 159.778 363.942 153.098 369.269 156.171 381.638 161.079 387.355 161.332 383.676 156.638 390.067 157.064 402.823 156.781 418.155 155.49 423.475 153.173 412.454 151.186 424.329 146.596 433.587 144.126 442.661 138.638 445.897 132.892 432.016 135.837 440.939 127.81 448.321 114.561 450.484 102.094 453.083 87.269 442.661 94.088 448.945 86.311 436.067 91.884 429.194 94.769 421.633 97.048 429.244 88.07 419.461 91.275 414.436 95.348 403.376 99.563 392.348 101.375 385.105 100.857 375.699 100.102 358.402 96.799 347.204 94.714 334.733 92.495 326.85 91.991 316.43 85.116 306.006 78.833 292.401 74.101 279.214 70.807 268.869 70.626 259.397 73.063 246.814 75.029 237.932 79.9 235.556 82.801 224.307 85.693 209.107 90.164 195.134 91.687 182.559 91.09 184.333 88.305 178.458 88.038 171.419 89.699 164.103 89.043 169.619 85.126 163.185 83.968 158.723 85.094 153.334 87.112 147.805 88.129 153.657 80.708 144.772 81.648 137.535 84.61 131.992 86.94 124.959 86.978 122.212 77.936 121.44 71.01 119.941 66.696 116.286 69.725 112.066 75.751 106.617 81.939 108.196 75.948 104.473 76.951 101.621 79.423 98.242 85.014 96.248 88.247 93.686 91.757 90.642 95.58 87.196 98.635 83.893 101.509" />
                    <polygon class="frame" id="frame-07"
                        points="89.574 65.243 78.58 72.173 72.93 76.5 71.982 84.661 65.241 91.167 56.083 97.332 45.996 103.626 42.288 106.206 36.63 112.168 43.211 119.589 50.874 124.287 56.586 126.25 61.197 131.314 65.416 134.701 75.335 130.465 89.682 126.965 100 127.348 105.547 132.418 109.693 144.667 111.349 156.984 114.157 163.69 117.727 150.434 121.686 167.139 124.882 172.79 128.268 166.282 135.483 177.356 149.704 184.409 155.643 195.303 168.143 214.246 178.896 232.02 188.793 246.657 191.707 259.089 181.138 260.289 176.558 265.136 172.996 270.743 172.069 276.353 183.913 277.061 201.93 276.829 205.069 271.995 210.091 262.937 212.688 254.443 210.785 246.409 206.522 237.376 214.06 246.367 222.558 251.593 238.091 257.171 255.963 262.126 263.096 261.495 269.564 257.529 272.591 253.451 267.069 251.986 269.25 247.22 260.896 244.503 253.516 239.879 248.494 235.911 238.636 237.009 233.183 237.629 222.993 232.962 217.729 221.361 214.322 209.181 211.013 201.986 213.838 200.336 218.691 205.075 225.241 205.661 237.379 202.361 245.754 198.978 260.443 196.889 270.214 196.534 273.485 192.262 273.247 180.392 278.372 179.368 283.2 179.29 287.702 173.596 288.929 167.35 286.511 162.984 297.302 161.507 306.071 164.281 308.643 155.817 312.407 164.431 317.869 145.87 320.258 152.103 323.813 131.236 332.608 142.781 334.26 138.636 345.205 144.25 359.95 148.082 353.411 139.268 378.586 146.365 391.044 147.951 382.325 139.561 409.704 136.367 422.121 132.309 410.158 129.446 426.138 121.782 436.952 110.05 444.457 95.143 445.919 87.768 434.35 86.473 439.983 83.293 423.718 82.184 411.085 87.231 422.661 75.173 409.591 79.134 396.647 85.984 385.689 93.165 374.15 98.745 359.921 99.431 342.752 100.706 331.314 99.19 318.641 93.273 301.193 84.081 287.393 76.043 266.449 71.854 249.311 74.645 233.366 80.554 221.54 84.814 212.329 89.709 199.461 95.378 188.824 96.162 170.932 93.961 174.854 90.259 164.025 89.726 170.533 86.214 162.802 82.829 155.322 81.821 161.93 78.518 157.34 75.078 149.957 73.801 139.832 72.201 147.08 67.87 137.865 65.437 130.091 66.911 123.916 64.653 116.988 55.507 113.936 46.829 110.618 39.181 105.743 32.798 102.252 38.623 100.675 43.017 99.53 49.898 97.025 55.346 94.499 48.651 92.65 44.759 89.996 52.668 89.355 59.701" />
                    <path class="frame" id="frame-08"
                        d="M95 56.4l-12.6 8.2-2 3.3.3 6.6-8.8 7-22 13.3-5.6 6 9.5 8.7 8 5 4.6 6.8 5.5-.3 14.3-2.3 10.7.1 8.3 3.5 5.6 7.3 2.5 7.4-.2 16.9 6-9.1 1.5 18.3 4.8-6.4 5.1 9.6 12 10.7 13.5 5.4 8.6 1.8 15.4 15.3 19.8 19.3 11.7 10.6-7.8 7.4-13.4 5-6 .4-5.8 5.2-4.2 7.5 3.6 3.2 8.2.5 6.5 2 5.8-1.4 10.8-7.6 9.8-7.4 9.5-5.2 23.2 4 19 .6 10-6.8 2.2-11-4.7-3.7-3 1.7-3.8-1 4-2.3 5.7-5.1-2.1-3.1 3.6-3.2 1.6-3.7 3.6-2 .7-6.4-4.5-3.9-7.8-7.8-2.1-3.5.2-6 8.5-4.5 5-1.5 6.2 3.4.2-3.8 15 5.4-1-6 4 5 5.4-17.1 1 12.3 5-17.6 5 12.3 2.2-4 13.8 9.2 15.5 4.6 4.5-.3-12-8.2 14.3 2.7 14.3-.6-8.2-5.2 16-3 11.4-7.7 10-7.4-11 .5 13.3-7.9 7.3-7.4-8-.4 12.6-18.7.8-13.2-6.3-19.8-7.3 8.5 1.7-6.5-9.8 9.9-5.3 3.7-6.7 6.6 1.8-8.6-6.5 6-6 6.6-7.5 6.4-11.6 5.4-14 4.3-16 2-11-.8-4-9.7-5-5.9-11.5-6.8-14.7-4.3L276 90l-12.8-4.1-14.4 1-12 3.2-12.5 4.5-11 4.6-8.7 1-8-1.2-7.2-2.8-9.5-3.2 3.7-1.4-4.8-1.8-7.6-.7 9.6-3.4-5-4.2-7-1.2-6.1-1 10.8-2.2-5.5-3.7-6.9-1-5-.5 12.7-5-4.6-2.8-4.9-1.1-9-.4 4-3.8-9-1.4-7.4-.4-7.2-10.6-11-11.2-8.2-9L109 20l-3.6-4.8-2.2 5.2-.3 11.8-.6 9.4-3.6-5-3.2-6-2.1-2.1-1.2 6-.4 7.9 1.4 7.5 1.8 6.6zm129.3 134.8l-2.5 4.2 9.1 8 15.3-3.7 1.3-3.7 5.2-6.4 5.2-7-7.1-6.2-4-4.8-6.5 7.6-8.4 6.8-7.6 5.2z" />
                </g>
            </svg>

        </div>
    </div>
    <div class="background">
        <div class="content">
            <main>
                <form class="login-form" method="POST" action="{{route('create.user')}}" onsubmit="return varifyForm()">
                    @csrf
                    <p class="register-caption text-primary">Register Here!</p>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="username">
                        <p class="text-danger" id="usererror"></p>
                        @error('username')
                         <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        <p class="text-danger" id="emlerror"></p>  
                        @error('email')
                        <p class="text-danger">{{ $message }}</p>
                       @enderror                      
                    </div>
                    <div class="mb-3">
                        <label for="registerpassword" class="form-label">Password</label>
                        <input type="password" name="registerpassword" class="form-control" id="registerpassword">
                        <p class="text-danger" id="passerror"></p>
                        @error('password')
                        <p class="text-danger">{{ $message }}</p>
                       @enderror

                    </div>
                    <div class="mb-3" >
                        <label for="mobile" class="form-label">Mobile</label>
                        <input type="text" onkeyup="varifyMobile()" maxlength="10" name="mobile" class="form-control" id="mobile">
                        <p class="text-danger" id="message" style="display: none">* Number only includes Integer</p>
                        <p class="text-danger" id="moberror"></p>
                        @error('mobile')
                        <p class="text-danger">{{ $message }}</p>
                       @enderror

                    </div>
                    <p> <a href={{route('login.page')}}>Already have an account ? Log In</a> </p>

                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
        </div>
    </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>

        <script>
            function varifyMobile(){
                let mobile = document.getElementById('mobile').value;
                let message = document.getElementById('message');
                const mobilePattern = /^[0-9]{10}$/; 
                
                if(isNaN(mobile)){
                    message.style.display = 'block';
                }
                else{
                    message.style.display = 'none';
                }
            }

            function varifyForm(){
                varifyMobile()
                let username = document.getElementById('username')
                let password = document.getElementById('registerpassword');
                let email = document.getElementById("email");
                let mobile = document.getElementById('mobile');

                let usernamerror = document.getElementById('usererror')
                let passerror = document.getElementById('passerror')
                let emlerror = document.getElementById('emlerror')
                let mobileError = document.getElementById('moberror')

                let emailPattern =   /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;



                //checking empty fields                

                //checking empty fields
                if (username.value.trim() == ""){
                    usernamerror.innerHTML = 'Invalid username!'
                    return false
                }
                else{
                    usernamerror.innerHTML = '';
                }
                if (email.value.trim() == "" || !emailPattern.test(email.value)){
                    emlerror.innerHTML = 'Invalid Email!'
                    return false
                }
               else{
                emlerror.innerHTML = ''
               }
                if (password.value.trim() == "" || password.value.length < 7){
                    passerror.innerHTML = 'password must be at least of 8 characters!'
                    return false
                }
                else{
                    passerror.innerHTML= ''
                }
                if (mobile.value.trim() == "" || mobile.value.length != 10){
                    mobileError.innerHTML = "Please enter a valid Mobile number!"
                    return false
                }
                else{
                    mobileError.innerHTML=''
                }

                return true;
            }
        </script>
            <script src="{{asset('assets/javascript/loader.js')}}"></script>

</body>

</html>