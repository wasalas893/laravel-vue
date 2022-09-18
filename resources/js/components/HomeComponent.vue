<template>
  
<div>
  

 <div id="category-filters">
    <div class="top-banner-main-wrap" style="background-image:url('/images/stone_category/category_banner.jpg')">
       <div class="banner-main-txt-wrap catergory-banner-main-wrap">
          <div class="main-head-wrap">
             <h1 class="txt-white">sjscjsjcsjcsjcsaj</h1>
          </div>
          <div class="banner-descript-wrap catergory-banner-descripion">
             <p class="paraf1 txt-white">scscksksakaskckckacak</p>
          </div>
       </div>
    </div>
 </div>

 <div class="left-filter-wrap-desktop">
    <div class="container-fluid">
       <div class="row">
          <div class="col-md-2 left-catergory-wrap-column">
             <div class="sidebar-main-wrap">
                <div class="sidebar-section-1">
                   <div class="filterby-txt-wrap">
                      <p class="paraf1">Filter by</p>
                   </div>
                   <div class="clearall-txt-wrap">
                      <a class="side-bar-clear-link" id="select"  style="cursor: pointer;">Clear all</a> 
                   </div>
                   <p class="new-class-id">dfdsfjsfjsjaaja</p>
                </div>
                <div class="sidebar-section-2">
                   <div class="categoryname-headtxt-wrap category-head-txt-wrap">
                      <p class="sidebar-main-category-names sidebar-title">Category</p>
                   </div>
                   <div class="categoryname-list-wrap main-category-list-wrap">
                      <ul class="pl-0">
                         <li class="category-calss-new" v-for="category in ca_all.data" :key="category.id">
                            <div class="shape-style-wrap">
                               <label class="container-checkbox">
                               <input type="checkbox"  name="Category_filter" v-bind:value="category.id" class="Category_filter" v-model="Category_filter">
                               <span class="checkmark"></span>
                               </label>
                               <div class="shape-name-wrap">
                              <p class="mb-0">{{category.cat_name}}</p>
                               </div>
                            </div>
                         </li>
                      </ul>
                   </div>
                </div>
                <div class="sidebar-section-3">
                   <div class="available-headtxt-wrap category-head-txt-wrap">
                      <p class="sidebar-title">Availability</p>
                   </div>
                   <div class="categoryname-list-wrap available-list-wrap main-category-list-wrap" id="avalable-filter-id">
                      <ul class="pl-0">
                         <li class="category-calss-new" v-for="availability in av_all.data" :key="availability.id">
                            <div class="shape-style-wrap">
                               <label class="container-checkbox">
                               <input type="checkbox"  name="Available_filter" v-bind:value="availability.id" v-model="Available_filter">
                               <span class="checkmark"></span>
                               </label>
                               <div class="shape-name-wrap">
                                  <p class="mb-0">{{availability.av_name}}</p>
                               </div>
                            </div>
                         </li>
                      </ul>
                   </div>
                </div>
                <div class="sidebar-section-4">
                   <div class="available-headtxt-wrap category-head-txt-wrap">
                      <p class="sidebar-title">Colors</p>
                   </div>
                   <div class="categoryname-list-wrap main-category-list-wrap color-list-wrap">
                      <ul class="pl-0">
                         <li>
                            <div class="color-codes-wrap" style="background:red;">
                               <input type="checkbox"  name="color_name" id="checkbox" class="color_name" value="" >
                               <span class="checkmark"></span>
                            </div>
                         </li>
                      </ul>
                   </div>
                </div>
                <div class="sidebar-section-5">
                   <div class="shape-headtxt-wrap category-head-txt-wrap">
                      <p class="sidebar-title">Shape</p>
                   </div>
                   <div class="shape-list-wrap">
                      <ul class="pl-0">
                         <li>
                            <div class="shape-style-wrap">
                               <label class="container-checkbox">
                               <input type="checkbox"  name="shape_filter" value="" class="shape_filter">
                               <span class="checkmark"></span>
                               </label>
                               <div class="shape-img-wrap">
                                  <img src="/images/stone_category/shape-cushion.svg" alt="adamant-gem" srcset="">
                               </div>
                               <div class="shape-name-wrap">
                                  <p class="mb-0">asjajsjsjsja</p>
                               </div>
                            </div>
                         </li>
                      </ul>
                   </div>
                </div>
                <div class="sidebar-section-6">
                   <div class="Clarity-headtxt-wrap category-head-txt-wrap">
                      <p class="sidebar-title">Clarity</p>
                   </div>
                   <div class="Clarity-list-wrap main-category-list-wrap">
                      <ul class="pl-0">
                         <li>
                            <div class="Clarity-style-wrap">
                               <label class="container-checkbox">jasdjsadjsadjsaj
                               <input type="checkbox"  value="" class="clarity_filter">
                               <span class="checkmark"></span>
                               </label>
                            </div>
                         </li>
                      </ul>
                   </div>
                </div>
                <div class="sidebar-section-7">
                   <div class="enhancement-headtxt-wrap category-head-txt-wrap">
                      <p class="sidebar-title">Enhancements</p>
                   </div>
                   <div class="enhancement-list-wrap main-category-list-wrap">
                      <ul class="pl-0">
                         <li>
                            <div class="enhancement-style-wrap">
                               <label class="container-checkbox">asjjdjadjja
                               <input type="checkbox"  name="enhancement_filter" value=""
                                  class="enhancement_filter">
                               <span class="checkmark"></span>
                               </label>
                            </div>
                         </li>
                      </ul>
                   </div>
                </div>
                <div class="sidebar-section-8">
                   <div class="caratweight-headtxt-wrap category-head-txt-wrap">
                      <p class="sidebar-title">Carat Weight</p>
                   </div>
                   <div class="caratweight-list-wrap main-category-list-wrap">
                      <ul class="pl-0">
                         <li>
                            <div class="caratweight-style-wrap">
                               <select class="form-control sorting-select"  id="weight_by">
                                  <option selected disabled hidden>Weight</option>
                                  <option id="CARAT WEIGHT: 0.00 - 0.99"  value="0.00 - 0.99">0.00 - 0.99</option>
                                  <option id="CARAT WEIGHT: 1.00 - 1.99" value="1.00-1.99">1.00 - 1.99</option>
                                  <option id="CARAT WEIGHT: 2.00 - 2.99" value="2.00-2.99">2.00 - 2.99</option>
                                  <option id="CARAT WEIGHT: 3.00 +" value="3.00-100.00">3.00 +</option>
                               </select>
                            </div>
                         </li>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-md-10">
             <div class="row">
                <div class="col-md-6 sort-by-select" id="sort-by-mobile">
                   <select class="form-control sorting-select" id="select_by">
                      <option selected disabled hidden>Sort by Weight</option>
                      <option  value="Newest">Max to Min</option>
                      <option  value="Weight">Min to Max</option>
                   </select>
                </div>
                <div class="col-md-6" id="mobile-pagi">
                </div>
             </div>
             <div class="products_listing-wrap" id="speakerResponse">
                <div class="row">
                   <div class="col-md-4">
                      <div class="category-prod-img-wrap">
                         <a href="#">
                            <p class="new-text">Available</p>
                            <img src="/images/stone_category/product/sapphire-cate-img.jpg" width="100%" alt="adamant-gem" srcset="">
                         </a>
                      </div>
                      <div class="category-prod-name-wrap txt-center">
                         <a href="#">
                            <p class="paraf1 mb-0">sadhhasdh, asjjjasd ct.</p>
                         </a>
                      </div>
                      <div class="category-prod-desc-wrap txt-center">
                         <p class="paraf2 txt-dark-gray">sadjjasdjasja</p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <div class="home-logo-mainwrap home-colord-logo-mainwrap">
    <div class="container-fluid">
       <div class="container">
          <div class="row">
             <div class="col-md-4">
                <div class="home-middle-logo-main-wrap">
                   <img src="/images/home-icon-1.png" class="home-middle-logo-img" alt="adamant-gem">
                   <h3 class="home-middle-logo-head txt-purple">Lorem Ipsum is simply dummy text</h3>
                   <p class="mb-0 home-middle-logo-descript paraf2">Lorem Ipsum is simply dummy text of the printing and
                      typesetting
                      industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an.
                   </p>
                </div>
             </div>
             <div class="col-md-4">
                <div class="home-middle-logo-main-wrap">
                   <img src="/images/home-icon-2.png" class="home-middle-logo-img" alt="adamant-gem">
                   <h3 class="home-middle-logo-head txt-purple">Lorem Ipsum is simply dummy text</h3>
                   <p class="mb-0 home-middle-logo-descript paraf2">Lorem Ipsum is simply dummy text of the printing and
                      typesetting
                      industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an.
                   </p>
                </div>
             </div>
             <div class="col-md-4">
                <div class="home-middle-logo-main-wrap">
                   <img src="/images/home-icon-3.png" class="home-middle-logo-img" alt="adamant-gem">
                   <h3 class="home-middle-logo-head txt-purple">Lorem Ipsum is simply dummy text</h3>
                   <p class="mb-0 home-middle-logo-descript paraf2">Lorem Ipsum is simply dummy text of the printing and
                      typesetting
                      industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an.
                   </p>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>

</div>


   

</template>


<script>
import axios from 'axios';
   
export default {

   
    data() {
            return {

            ca_all:[],
            av_all:[],
            Category_filter:[],
            Available_filter:[]

            }
          },
          
          mounted() {
            this.getInitialCategory();
            this.getInitialAvailability();
            
          },
        methods: {
          getInitialCategory(){
          try{
              axios.get('http://localhost:8000/api/category/data').then(response=>(this.ca_all=response))
              
            }catch(e){}

         },
         getInitialAvailability(){
          try{
              axios.get('http://localhost:8000/api/availability/data').then(response=>(this.av_all=response))
              
            }catch(e){}

         },
          
        },
        
        



  }

  
  </script>