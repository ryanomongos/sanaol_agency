<template>

<body class="flex flex-col">

  <div class="flex items-center justify-between pl-[15%] pr-[10%] mt-[25px] mb-[25px] w-full">  
    <h1 class="font-bold text-3xl mb-[20%] pb-[15%]">Events</h1>
    <div class="float-right pl-[47.890%]   mb-[17%] w-full">
        <EditButton text="Edit Events"></EditButton>
      <div class="float-right pr-[40%]">
        <EventCard></EventCard>
      </div>
    </div>

  </div>

  <div class="flex items-center justify-between pl-[15%] pr-[10%] mt-[] mb-[] w-full">
    <h1 class="font-bold text-3xl" >News articles</h1>
      <div class="float-right pl-[50%]  mb-[2px] w-full">
          <EditButton text="Add Articles"></EditButton>
      </div>

  </div>
  <div>
    <EventCard2Vue></EventCard2Vue>
    <br>
    <EventCard2Vue></EventCard2Vue>
    <br>
    <EventCard2Vue></EventCard2Vue>

  </div>
    <br>
    <br>
  <div>
    <PaginationButtonVue class="flex flex-col items-center"></PaginationButtonVue>
  </div>
</body>

</template>


<script>
import Navbar from '../components/Navigation/Navbar.vue';
import Modal from '../components/Modal/Modal.vue';
import TextInput from '../components/Input/TextInput.vue';
import SearchButton from '../components/Buttons/SearchButton.vue';
import EventCard2Vue from '../components/Cards/Events/EventCard2.vue';
import EventCard from '../components/Cards/Events/EventCard.vue';
import PaginationButtonVue from '../components/Buttons/PaginationButton.vue';
import EditButton from '../components/Buttons/EditButton.vue';
export default{
  components: {
    Navbar,
    Modal,
    TextInput,
    SearchButton,
    EventCard2Vue,
    EventCard,
    PaginationButtonVue,
    EditButton
    
},
}
</script>

<style>



</style>
