<template>
  <div>
    <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner d-flex justify-content-center">

      <div class="col-md-4">

      <!-- Register -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="index.html" class="app-brand-link gap-2">

    

              
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-2">ສະບາຍດີ</h4>
          <p class="mb-4">ຍີນດີຕ້ອນຮັບເຂົ້າສູ່ລະບົບໂຮງຮຽນເພື່ອເບິ່ງຂໍ້ມູນລູກຂອງທ່ານ!!</p>

          
            <div class="mb-3">
              <label for="email" class="form-label">ໃສ່ອີເມວຂອງທ່ານ</label>
              <input type="text" class="form-control" id="email" placeholder="ກະລຸນາໃສ່ອີເມວຂອງທ່ານ">
            </div>
            <div class="mb-3 form-password-toggle">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="password">ລະຫັດຜ່ານ</label>
              </div>
              <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password" placeholder="············" aria-describedby="password">
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
            </div>

            <div class="mb-3">
              <button class="btn btn-primary d-grid w-100" type="submit">ເຂົ້າສູ່ລະບົບ</button>
            </div>
     

          <p class="text-center">
            <span>ທ່ານບໍ່ມີບັນຊີ? </span>
            <router-link to="/register">
              <span>ລົງທະບຽນ</span>
            </router-link>
          </p>
        </div>
      </div>
      <!-- /Register -->

      </div>


    </div>
  </div>
  </div>
</template>

<script>
export default {
  name: 'PnsschoolLogin',

  data() {
    return {
        
    };
  },

  mounted() {
    
  },

  methods: {
    
  },
};
</script>

<style lang="scss" scoped>

</style>