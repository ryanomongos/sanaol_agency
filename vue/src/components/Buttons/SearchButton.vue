<template>
  <div class="max-w-md mx-auto rounded-lg overflow-hidden md:max-w-xl">
  <div class="md:flex">
      <div class="w-full p-3">
        
        <div class="relative outline outline-2">
          <i class="absolute fa fa-search text-gray-40 top-5 left-4"></i>
          <input type="text" placeholder= "Search" class="bg-white h-14 w-full px-12 rounded-lg focus:outline-none hover:cursor-pointer" name="">
          <span class="absolute top-4 right-5 border-l pl-4"><i class="fa fa-microphone text-gray-500 hover:text-green-500 hover:cursor-pointer"></i></span>
        </div>
        
        

        
      </div>
   
  </div>
</div>
  
</template>

<script>
export default{
    name:"SearchButton",
}
</script>

<style lang="scss" scoped>

</style>