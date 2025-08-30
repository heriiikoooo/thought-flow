<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tailwind Test</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body style="height:100vh">
        <div class="">
            <div class="mx-auto w-2/5 border p-8 pb-5">
                <div class="font-montserrat content-wrapper w-full  rounded-lg py-2">
                    @foreach ($posts as $post)
                    <div class="content flex p-2 px-5 border rounded-md mb-2">
                        <div class="user-profile h-8 w-8 border rounded-full"></div>
                        <div class="flex flex-col w-full px-3 pb-1">
                            <div class="top-div flex w-full justify-between">
                                <div class="font-bold tracking-tight">{{ $post['author']}} <span class="font-normal"> &nbsp; {{ $post['created_at'] }}</span></div>
                                <div class="">...</div>
                            </div>
                            <div class="item-cont w-full">
                                <div class="content-details pb-2 ">
                                    {{ $post['content'] }}
                                </div>
                                <div class="content-actions flex pb-1">
                                    <div class="heart cursor-pointer mr-4 flex items-center" role=button>
                                        <svg width="20px" height="20px" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000" stroke-width="0.00024000000000000003">
                                            <path d="M8.96173 18.9109L9.42605 18.3219L8.96173 18.9109ZM12 5.50063L11.4596 6.02073C11.463 6.02421 11.4664 6.02765 11.4698 6.03106L12 5.50063ZM15.0383 18.9109L15.5026 19.4999L15.0383 18.9109ZM13.4698 8.03034C13.7627 8.32318 14.2376 8.32309 14.5304 8.03014C14.8233 7.7372 14.8232 7.26232 14.5302 6.96948L13.4698 8.03034ZM9.42605 18.3219C7.91039 17.1271 6.25307 15.9603 4.93829 14.4798C3.64922 13.0282 2.75 11.3345 2.75 9.1371H1.25C1.25 11.8026 2.3605 13.8361 3.81672 15.4758C5.24723 17.0866 7.07077 18.3752 8.49742 19.4999L9.42605 18.3219ZM2.75 9.1371C2.75 6.98623 3.96537 5.18252 5.62436 4.42419C7.23607 3.68748 9.40166 3.88258 11.4596 6.02073L12.5404 4.98053C10.0985 2.44352 7.26409 2.02539 5.00076 3.05996C2.78471 4.07292 1.25 6.42503 1.25 9.1371H2.75ZM8.49742 19.4999C9.00965 19.9037 9.55954 20.3343 10.1168 20.6599C10.6739 20.9854 11.3096 21.25 12 21.25V19.75C11.6904 19.75 11.3261 19.6293 10.8736 19.3648C10.4213 19.1005 9.95208 18.7366 9.42605 18.3219L8.49742 19.4999ZM15.5026 19.4999C16.9292 18.3752 18.7528 17.0866 20.1833 15.4758C21.6395 13.8361 22.75 11.8026 22.75 9.1371H21.25C21.25 11.3345 20.3508 13.0282 19.0617 14.4798C17.7469 15.9603 16.0896 17.1271 14.574 18.3219L15.5026 19.4999ZM22.75 9.1371C22.75 6.42503 21.2153 4.07292 18.9992 3.05996C16.7359 2.02539 13.9015 2.44352 11.4596 4.98053L12.5404 6.02073C14.5983 3.88258 16.7639 3.68748 18.3756 4.42419C20.0346 5.18252 21.25 6.98623 21.25 9.1371H22.75ZM14.574 18.3219C14.0479 18.7366 13.5787 19.1005 13.1264 19.3648C12.6739 19.6293 12.3096 19.75 12 19.75V21.25C12.6904 21.25 13.3261 20.9854 13.8832 20.6599C14.4405 20.3343 14.9903 19.9037 15.5026 19.4999L14.574 18.3219ZM11.4698 6.03106L13.4698 8.03034L14.5302 6.96948L12.5302 4.97021L11.4698 6.03106Z" fill="#000000"></path> 
                                        </svg>
                                        <span class="pl-1 text-sm">{{ $post['likes'] }}</span>
                                    </div>
                                    <div class="comment cursor-pointer mr-4 flex items-center" role=button>
                                        <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" transform="matrix(-1, 0, 0, 1, 0, 0)">
                                            <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 14.663 3.04094 17.0829 4.73812 18.875L2.72681 21.1705C2.44361 21.4937 2.67314 22 3.10288 22H12Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> 
                                        </svg>
                                        <span class="pl-1 text-sm">{{ $post['comments'] }}</span>
                                    </div>
                                    <div class="repost cursor-pointer mr-4 flex items-center" role=button>
                                        <svg fill="#000000" width="20px" height="20px" viewBox="0 0 24 24" id="repost-round" xmlns="http://www.w3.org/2000/svg" class="icon line">
                                            <path id="primary" d="M6,14V9A6,6,0,0,1,16.89,5.54" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width:1.5;"></path>
                                            <polyline id="primary-2" data-name="primary" points="8 12 6 14 4 12" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width:1.5;"></polyline>
                                            <path id="primary-3" data-name="primary" d="M18,10v5A6,6,0,0,1,7.11,18.46" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width:1.5;"></path>
                                            <polyline id="primary-4" data-name="primary" points="16 12 18 10 20 12" style="fill: none; stroke: #000000; stroke-linecap: round; stroke-linejoin: round; stroke-width:1.5;"></polyline>
                                        </svg>
                                        <span class="pl-1 text-sm">{{ $post['reposts'] ?  $post['reposts'] : ''}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>