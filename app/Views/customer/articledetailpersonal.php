<?php echo $this->extend('customer/layout'); ?>

<?php echo $this->section('content'); ?>
<section id="main">
    <div class="container mx-auto text-sm">
        <div class="grid my-7 mx-10 lg:mx-32">

            <div class="pb-3 flex flex-col">
                <div class="font-medium px-3 text-sm">
                    <a href="<?php echo base_url(); ?>kb" class="text-main hover:text-sky-600">Home</a>
                    <span> / </span>
                    <a href="<?php echo base_url(); ?>kb/generalarticle?category=<?= $category_title; ?>" class="text-main hover:text-sky-600"><?= $category_title; ?></a>
                    <span> / </span>
                    <span><?= $subcategory_title; ?></span>
                </div>
                <div class="py-5 font-bold text-3xl"><?= $content->title; ?></div>
                <div class="flex items-center gap-4 text-sm pe-10 mt-5 mb-4">
                    <span class="uploadTime" datetime="<?= $content->created_at; ?>"><?= $content->created_at; ?></span>
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span><?= $content->content_views; ?></span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                        </svg>
                        <span><?= $content->good_insight; ?></span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 15h2.25m8.024-9.75c.011.05.028.1.052.148.591 1.2.924 2.55.924 3.977a8.96 8.96 0 01-.999 4.125m.023-8.25c-.076-.365.183-.75.575-.75h.908c.889 0 1.713.518 1.972 1.368.339 1.11.521 2.287.521 3.507 0 1.553-.295 3.036-.831 4.398C20.613 14.547 19.833 15 19 15h-1.053c-.472 0-.745-.556-.5-.96a8.95 8.95 0 00.303-.54m.023-8.25H16.48a4.5 4.5 0 01-1.423-.23l-3.114-1.04a4.5 4.5 0 00-1.423-.23H6.504c-.618 0-1.217.247-1.605.729A11.95 11.95 0 002.25 12c0 .434.023.863.068 1.285C2.427 14.306 3.346 15 4.372 15h3.126c.618 0 .991.724.725 1.282A7.471 7.471 0 007.5 19.5a2.25 2.25 0 002.25 2.25.75.75 0 00.75-.75v-.633c0-.573.11-1.14.322-1.672.304-.76.93-1.33 1.653-1.715a9.04 9.04 0 002.86-2.4c.498-.634 1.226-1.08 2.032-1.08h.384" />
                        </svg>
                        <span><?= $content->bad_insight; ?></span>
                    </div>
                </div>
                <div class="text-justify text-sm lg:text-base">
                    <?= $content->content; ?>
                </div>
                <div class="pb-3 pt-6 text-base font-semibold lg:text-xl">
                    Apakah artikel ini membantu ?
                </div>
                <div class="reactions flex gap-9 px-3">
                    <div class="flex cursor-pointer gap-1 items-center" data-id="<?= $content->id; ?>" id="likes" data-type="like">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="<?= session('like') ? '#00d431' : 'none'; ?>" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                        </svg>
                        Iya
                    </div>
                    <div data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="flex cursor-pointer gap-1 items-center font-semibold border-none border-slate-400 px-5 py-0.5" data-id="<?= $content->id; ?>" id="notlikes" data-type="dislike">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="<?= session('dislike') ? '#d10023' : 'none'; ?>" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 15h2.25m8.024-9.75c.011.05.028.1.052.148.591 1.2.924 2.55.924 3.977a8.96 8.96 0 01-.999 4.125m.023-8.25c-.076-.365.183-.75.575-.75h.908c.889 0 1.713.518 1.972 1.368.339 1.11.521 2.287.521 3.507 0 1.553-.295 3.036-.831 4.398C20.613 14.547 19.833 15 19 15h-1.053c-.472 0-.745-.556-.5-.96a8.95 8.95 0 00.303-.54m.023-8.25H16.48a4.5 4.5 0 01-1.423-.23l-3.114-1.04a4.5 4.5 0 00-1.423-.23H6.504c-.618 0-1.217.247-1.605.729A11.95 11.95 0 002.25 12c0 .434.023.863.068 1.285C2.427 14.306 3.346 15 4.372 15h3.126c.618 0 .991.724.725 1.282A7.471 7.471 0 007.5 19.5a2.25 2.25 0 002.25 2.25.75.75 0 00.75-.75v-.633c0-.573.11-1.14.322-1.672.304-.76.93-1.33 1.653-1.715a9.04 9.04 0 002.86-2.4c.498-.634 1.226-1.08 2.032-1.08h.384" />
                        </svg>
                        Tidak
                    </div>
                    <div id="authentication-modal" data-modal="formModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 bottom-0 z-50 p-4 overflow-x-hidden overflow-y-auto hidden">
                        <!-- Modal content -->
                        <div class="absolute inset-0 bg-white flex items-center justify-center w-full md:w-[55%] lg:w-[40%] h-full md:h-[97%] md:rounded-md my-auto mx-auto">
                            <button type="button" class="absolute top-3 flex justify-center right-2.5 text-gray-400 bg-transparent hover:bg-slate-200  rounded-lg text-sm w-8 h-8 ml-auto items-center hover:text-form" data-modal-hide="authentication-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="px-6 lg:px-8 w-[95%]">
                                <form class="form space-y-2" action="<?php echo base_url(); ?>kb/feedback" method="post" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    
                                    <script>
                                        var fileMessage = <?php echo json_encode(session('errors')); ?>;
                                    </script>
                                    <div class="flex gap-2">
                                        <div class="w-full">
                                            <label for="category" class="block mb-2 text-xs font-medium text-form">Category</label>
                                            <input type="category" name="category" id="category" class=" border text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-500 placeholder-gray-400 text-form outline-main" placeholder="Username" value="<?= $content->name_category; ?>" required readonly>
                                        </div>
                                        <div class="w-full">
                                            <label for="subcategory" class="block mb-2 text-xs font-medium text-form">Sub Category</label>
                                            <input type="subcategory" name="subcategory" id="subcategory" class=" border text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-500 placeholder-gray-400 text-form outline-main" value="<?= $content->name_subcategory; ?>" required readonly>
                                        </div>
                                    </div>
                                    
                                    <div class="w-full">
                                            <label for="title" class="block mb-2 text-xs font-medium text-form">Title</label>
                                            <input type="title" name="title" id="title" class=" border text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-500 placeholder-gray-400 text-form outline-main" value="<?= $content->title; ?>" required readonly>
                                    </div>

                                    <div class="w-full mt-4">
                                        <label class="block mb-2 text-xs font-medium text-form">Feedback</label>

                                        <div class="flex flex-col gap-2">
                                            <label class="flex items-center">
                                                <input type="radio" name="feedback" value="tidak_mengerti" required>
                                                <span class="ml-2 text-form">Tidak mengerti isi artikel</span>
                                            </label>

                                            <label class="flex items-center">
                                                <input type="radio" name="feedback" value="informasi_kurang_lengkap" required>
                                                <span class="ml-2 text-form">Informasi kurang lengkap</span>
                                            </label>

                                            <label class="flex items-center">
                                                <input type="radio" name="feedback" value="solusi_tidak_membantu" required>
                                                <span class="ml-2 text-form">Solusi tidak membantu</span>
                                            </label>

                                            <label class="flex items-center">
                                                <input type="radio" name="feedback" value="link_error" required>
                                                <span class="ml-2 text-form">Link Error</span>
                                            </label>

                                            <label class="flex items-center">
                                                <input type="radio" name="feedback" value="tidak_puas_dengan_kebijakan" required>
                                                <span class="ml-2 text-form">Tidak puas dengan kebijakan Virtusee</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div>
                                        <label for="message" class="block mb-2 text-xs font-medium text-form">Description</label>
                                        <textarea id="message" name="message" rows="5" class="border text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 border-gray-500 placeholder-gray-400 text-form outline-main" placeholder="Write your thoughts here..."><?= old('message'); ?></textarea>
                                    </div>
                                    

                                    <button type="submit" class=" text-white float-right bg-main focus:ring-2 focus:outline-none rounded-lg text-sm px-5 py-2.5 text-center hover:bg-[#179CC8] ">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if (session()->has('success')) : ?>
                    <div class="flash-success" data-flashmessage="<?php echo session('success') ?>"></div>
                <?php else : ?>
                    <div class="flash-error" data-flashmessage="<?php echo session('error') ?>"></div>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>

<?php echo $this->endSection(); ?>