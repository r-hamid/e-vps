$(window.document).ready(function() {

  /**
   * Visa Categories & Sub categories applications
   */
  const visaCategorySelect = $("#visa-category");
  const visaSubCategorySelect = $("#visa-sub-category");

  $.each(visaCategoryAndSubCategory, function(index, option) {
    visaCategorySelect.append($('<option>', {
      value: option.value,
      text: option.name,
    }))
  })

  visaCategorySelect.on('change', function() {
    visaSubCategorySelect
      .find('option')
      .remove()
      .end()
      .append('<option selected>Select</option>')

    const selectedCategory = $(this).val()
    const subCategories = visaCategoryAndSubCategory.find((category) => category.value === selectedCategory);

    $.each(subCategories.subCategories, function(index, option) {
      visaSubCategorySelect.append($('<option>', {
        value: option.value,
        text: option.name,
      }))
    })
  })


  /**
   * Countries to be shown in the dropdown
   */
  const countrySelect = $("#country")

  $.each(countriesNameList, function(index, value) {
    countrySelect.append($('<option>', {
      value,
      text: value
    }))
  })


  /**
   * Duration calculator
   */
  const durationCal = $("#visa-duration-value")
  const durationNumbers = $("#visa-duration")

  durationCal.on('change', function() {
    durationNumbers
      .find('option')
      .remove()
      .end()
    const duration = $(this).val()
    console.log(duration)
    if (duration === "day") {
      $.each(Array.from({ length: 30 }, (v, i) => i + 1), function(index, option) {
        durationNumbers.append($("<option>", {
          value: option,
          text: option,
        }))
      })
    }
    if (duration === "month") {
      $.each(Array.from({ length: 11 }, (v, i) => i + 1), function(index, option) {
        durationNumbers.append($("<option>", {
          value: option,
          text: option
        }))
      })
    }
    if (duration === "year") {
      $.each(Array.from({ length: 5 }, (v, i) => i + 1), function(index, option) {
        durationNumbers.append($("<option>", {
          value: option,
          text: option
        }))
      })
    }
  })


  /**
   * Handling arrival and departure dates
   */
  const arrivalDateInput = $("#arrival-date");
  const departureDateInput = $("#departure-date");

  arrivalDateInput.attr("min", new Date().toISOString().split('T')[0])
  departureDateInput.attr("min", new Date().toISOString().split('T')[0])

  arrivalDateInput.on('change', function() {
    const arrivalDate = $(this).val()
    departureDateInput.attr("min", arrivalDate)
  })

  departureDateInput.on('change', function() {
    const departureDate = $(this).val()
    arrivalDateInput.attr("max", departureDate)
  })
})
