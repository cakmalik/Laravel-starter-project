 <!-- Sidebar Toggle Untuk Mobile-->
 <div
     class="sticky top-0 inset-x-0 z-20 bg-white border-y px-4 sm:px-6 md:px-8 lg:hidden dark:bg-gray-800 dark:border-gray-700">
     <div class="flex items-center py-4">
         <!-- Navigation Toggle -->
         <button type="button" class="text-gray-500 hover:text-gray-600" data-hs-overlay="#application-sidebar"
             aria-controls="application-sidebar" aria-label="Toggle navigation">
             <span class="sr-only">Toggle Navigation</span>
             <svg class="w-5 h-5" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                 <path fill-rule="evenodd"
                     d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
             </svg>
         </button>

         @isset($title)
             <h3 class="font-semibold capitalize ms-3 dark:text-white">{{ __($title) ?? '' }}</h3>
         @endisset
         <!-- End Navigation Toggle -->


         <!-- Breadcrumb -->
         {{-- TODO:nanti aja ini kalo sempat. --}}
         {{-- {{ Breadcrumbs::render() }} --}}
         <!-- End Breadcrumb -->
     </div>
 </div>
 <!-- End Sidebar Toggle -->
