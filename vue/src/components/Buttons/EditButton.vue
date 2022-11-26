<template>
    <div class="text-center pt-1 mb-4 pb-1">
             <button
               class="inline-block w-[141px] h-[36px] text-primary bg-indigo-50 text-base leading-tight
               uppercase rounded shadow-md focus:shadow-lg
               hover:bg-indigo-500 hover:shadow-lg hover:text-indigo-50 outline-primary outline-1 outline
               focus:ring-0 active:shadow-lg transition duration-300 ease-in-out mb-3 font-[20px]"
               type="submit"
               data-mdb-ripple="true"
               data-mdb-ripple-color="light"
               data-model-toggle="popup-modal"
             >
               {{ text }}
             </button>
     </div>
  </template>
  
  <script>
  export default {
   props:{
     text: String
   }
  };
  </script>
  
  <style>
  </style>
  