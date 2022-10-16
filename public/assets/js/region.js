
         let provinceID = $('#select_province').val();
         let regencyID = $('#select_regency').val();
         let districtID = $('#select_district').val();

         //  select province:start
         $('#select_province').select2({
            allowClear: true,
            ajax: {
               url: "/provinces",
               dataType: 'json',
               delay: 250,
               processResults: function(data) {
                  return {
                     results: $.map(data, function(item) {
                        return {
                           text: item.name,
                           id: item.id
                        }
                     })
                  };
               }
            }
         });
         //  select province:end

         //  select regency:start
         $('#select_regency').select2({
            allowClear: true,
            ajax: {
               url: "/regencies?provinceID=" + provinceID,
               dataType: 'json',
               delay: 250,
               processResults: function(data) {
                  return {
                     results: $.map(data, function(item) {
                        return {
                           text: item.name,
                           id: item.id
                        }
                     })
                  };
               }
            }
         });
         //  select regency:end

         //  select district:start
         $('#select_district').select2({
            allowClear: true,
            ajax: {
               url: "/districts?regencyID=" + regencyID,
               dataType: 'json',
               delay: 250,
               processResults: function(data) {
                  return {
                     results: $.map(data, function(item) {
                        return {
                           text: item.name,
                           id: item.id
                        }
                     })
                  };
               }
            }
         });
         //  select district:end

         //  select village:start
         $('#select_village').select2({
            allowClear: true,
            ajax: {
               url: "/villages?districtID=" + districtID,
               dataType: 'json',
               delay: 250,
               processResults: function(data) {
                  return {
                     results: $.map(data, function(item) {
                        return {
                           text: item.name,
                           id: item.id
                        }
                     })
                  };
               }
            }
         });
         //  select village:end


         //  Event on change select province:start
         $('#select_province').change(function() {
            //clear select
            $('#select_regency').empty();
            $("#select_district").empty();
            $("#select_village").empty();
            //set id
            provinceID = $(this).val();
            if (provinceID) {
               $('#select_regency').select2({
                  allowClear: true,
                  ajax: {
                     url: "/regencies?provinceID=" + provinceID,
                     dataType: 'json',
                     delay: 250,
                     processResults: function(data) {
                        return {
                           results: $.map(data, function(item) {
                              return {
                                 text: item.name,
                                 id: item.id
                              }
                           })
                        };
                     }
                  }
               });
            } else {
               $('#select_regency').empty();
               $("#select_district").empty();
               $("#select_village").empty();
            }
         });
         //  Event on change select province:end

         //  Event on change select regency:start
         $('#select_regency').change(function() {
            //clear select
            $("#select_district").empty();
            $("#select_village").empty();
            //set id
            regencyID = $(this).val();
            if (regencyID) {
               $('#select_district').select2({
                  allowClear: true,
                  ajax: {
                     url: "/districts?regencyID=" + regencyID,
                     dataType: 'json',
                     delay: 250,
                     processResults: function(data) {
                        return {
                           results: $.map(data, function(item) {
                              return {
                                 text: item.name,
                                 id: item.id
                              }
                           })
                        };
                     }
                  }
               });
            } else {
               $("#select_district").empty();
               $("#select_village").empty();
            }
         });
         //  Event on change select regency:end

         //  Event on change select district:Start
         $('#select_district').change(function() {
            //clear select
            $("#select_village").empty();
            //set id
            districtID = $(this).val();
            if (districtID) {
               $('#select_village').select2({
                  allowClear: true,
                  ajax: {
                     url: "/villages?districtID=" + districtID,
                     dataType: 'json',
                     delay: 250,
                     processResults: function(data) {
                        return {
                           results: $.map(data, function(item) {
                              return {
                                 text: item.name,
                                 id: item.id
                              }
                           })
                        };
                     }
                  }
               });
            }
         });
         //  Event on change select district:End

         // EVENT ON CLEAR
         $('#select_province').on('select2:clear', function(e) {
            $("#select_regency").select2();
            $("#select_district").select2();
            $("#select_village").select2();
         });

         $('#select_regency').on('select2:clear', function(e) {
            $("#select_district").select2();
            $("#select_village").select2();
         });

         $('#select_district').on('select2:clear', function(e) {
            $("#select_village").select2();
         });