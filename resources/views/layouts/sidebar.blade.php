 <!-- Sidebar -->
 <div id="application-sidebar"
     class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform hidden fixed top-0 left-0 bottom-0 z-[60] w-64 bg-white border-r border-gray-200 pt-7 pb-10 overflow-y-auto scrollbar-y lg:block lg:translate-x-0 lg:right-auto lg:bottom-0 dark:scrollbar-y dark:bg-gray-800 dark:border-gray-700">
     <div class="px-6">
         <a class="flex-none text-xl font-semibold dark:text-white" href="#"
             aria-label="Brand">{{ config('app.name') }}</a>
     </div>

     <nav class="hs-accordion-group p-6 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
         @livewire('menu.sidebar')
     </nav>
 </div>
 <!-- End Sidebar -->
