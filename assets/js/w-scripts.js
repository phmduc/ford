/**
 * Process scrollbar width
 *
 */
const scrollbarWidth = window.innerWidth - document.body.clientWidth;
document.body.style.setProperty('--scrollbarWidth', `${scrollbarWidth}px`);

/**
 * Fix 100vh on iOS (When address bar is show)
 *
 * Source: https://stackoverflow.com/questions/37112218/css3-100vh-not-constant-in-mobile-browser
 */
function appHeight() {
  const doc = document.documentElement;
  doc.style.setProperty("--vh", window.innerHeight * 0.01 + "px");
}
window.addEventListener("resize", appHeight);
appHeight();
/*--- blog--- */
console.log("btn");
const toggleBlogs = document.querySelectorAll(".sidebar-heading > span");
toggleBlogs.forEach(function (toggleBlog, index) {
  toggleBlog.addEventListener("click", function () {
    const contentElement = document.querySelectorAll(".details");
    contentElement[index].classList.toggle("isShowFilters");
    toggleBlog.classList.toggle("isRotate");
  });
});
/*---end blog--- */
/*------add product----- */

const decrementButtons = document.querySelectorAll(".decrement");
const incrementButtons = document.querySelectorAll(".increment");
const inputs = document.querySelectorAll("#myNumber");
const texts = document.querySelectorAll(".text-add");

for (let i = 0; i < decrementButtons.length; i++) {
  const decrementButton = decrementButtons[i];
  const incrementButton = incrementButtons[i];
  const input = inputs[i];
  const text = texts[i];
  decrementButton.addEventListener("click", () => {
    let value = parseInt(input.value);
    if (value > 0) {
      value--;
    }
    input.value = value.toString();
    if (value === 0) {
      decrementButton.classList.remove("opacity");
      input.classList.remove("showNumber");
      text.classList.remove("textAdd");
    }
  });

  incrementButton.addEventListener("click", () => {
    let value = parseInt(input.value);
    value++;
    input.value = value.toString();
    decrementButton.classList.add("opacity");
    text.classList.add("textAdd");
    input.classList.add("showNumber");
  });
}

/*------end add-product----- */

/*---open&close - filters --- */
const toggleButtons = document.querySelectorAll(".filter-fc > span");
toggleButtons.forEach(function (button, index) {
  button.addEventListener("click", function () {
    const contentElement = document.querySelectorAll(".filter-wrapper");
    contentElement[index].classList.toggle("isShowFilters");
    button.classList.toggle("isRotate");
  });
});

/*---price---*/

const rangeInput = document.querySelectorAll(".range-input input"),
  priceInput = document.querySelectorAll(".price-input input"),
  range = document.querySelector(".slider .progress");
let priceGap = 1000;

priceInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minPrice = parseInt(priceInput[0].value),
      maxPrice = parseInt(priceInput[1].value);

    if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
      if (e.target.className === "input-min") {
        rangeInput[0].value = minPrice;
        range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
      } else {
        rangeInput[1].value = maxPrice;
        range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
      }
    }
  });
});

rangeInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minVal = parseInt(rangeInput[0].value),
      maxVal = parseInt(rangeInput[1].value);

    if (maxVal - minVal < priceGap) {
      if (e.target.className === "range-min") {
        rangeInput[0].value = maxVal - priceGap;
      } else {
        rangeInput[1].value = minVal + priceGap;
      }
    } else {
      priceInput[0].value = minVal;
      priceInput[1].value = maxVal;
      range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
      range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
    }
  });
});
/*---end price---*/

// show filters

// end show filters
const toggle = document.querySelector(".w-products .filters-toggle");
const filters = document.querySelector(".w-products .product-filter-container");
const back = document.querySelector(".w-products .product-back");
const activeClass = "is-show";
if(toggle){
  toggle.addEventListener("click", function () {
    filters.classList.add(activeClass);
  });
  back.addEventListener("click", function () {
    filters.classList.remove(activeClass);
  });
  window.addEventListener("click", function (e) {
    if (
      !filters.contains(e.target) &&
      !e.target.matches(".w-products .filters-toggle")
    ) {
      filters.classList.remove(activeClass);
    }
  });
}


/*--- end filters---*/


const accordion_button = document.querySelectorAll('.accordion-button');
const accordion_collapse = document.querySelectorAll('.accordion-collapse');
const btn_hide = document.querySelectorAll('.btn_hide');
const btn_show = document.querySelectorAll('.btn_show');
for (let i = 0; i < accordion_button.length; i++) {
  accordion_button[i].addEventListener('click', function () {
    accordion_collapse[i].classList.toggle('hide_item');
    btn_show[i].classList.toggle('hide_item');
    btn_hide[i].classList.toggle('show_item');
  });
}
const qty_right_plus = document.querySelector('.qty-right-plus');
const qty_left_minus = document.querySelector('.qty-left-minus');
const numer_quaty = document.querySelector('.numer_quaty');
if(qty_right_plus && qty_left_minus && numer_quaty){
let number_qt = 0;
qty_right_plus.addEventListener('click', function () {
  number_qt = number_qt + 1;
  numer_quaty.innerHTML = number_qt;
});
qty_left_minus.addEventListener('click', function () {
  if (number_qt <= 0) {
    return;
  }
  number_qt = number_qt - 1;
  numer_quaty.innerHTML = number_qt;
});
const item_price = document.querySelectorAll('.select-packege li a');
item_price.forEach((it_price) =>
  it_price.addEventListener('click', function () {
    item_price.forEach((price) => {
      price.classList.remove('active_price');
    });
    it_price.classList.add('active_price');
  })
);
}
const img_item = document.querySelectorAll('.img_item');
img_item.forEach((item) =>
  item.addEventListener('click', function (e) {
    var img_box = document.getElementById('img_box');
    img_box.src = e.target.src;
    img_item.forEach((img) => {
      img.classList.remove('net');
    });

    item.classList.add('net');
  })
);

const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const tabs = $$('.tab-item');
const panes = $$('.tab-pane');
const tabActive = $('.tab-item.active');
const line = $('.tabs .line');

if(tabs && panes && tabActive && line){

requestIdleCallback(function () {
  line.style.left = tabActive.offsetLeft + 'px';
  line.style.width = tabActive.offsetWidth + 'px';
});

tabs.forEach((tab, index) => {
  const pane = panes[index];

  tab.onclick = function () {
    $('.tab-item.active').classList.remove('active');
    $('.tab-pane.active').classList.remove('active');

    line.style.left = this.offsetLeft + 'px';
    line.style.width = this.offsetWidth + 'px';

    this.classList.add('active');
    pane.classList.add('active');
  };
});

}


// document.addEventListener('DOMContentLoaded', () =>
//   requestAnimationFrame(updateTime)
// )(
//   (function () {
//     const second = 1000,
//       minute = second * 60,
//       hour = minute * 60,
//       day = hour * 24;

//     let today = new Date(),
//       dd = String(today.getDate()).padStart(2, '0'),
//       mm = String(today.getMonth() + 1).padStart(2, '0'),
//       yyyy = today.getFullYear(),
//       nextYear = yyyy + 1,
//       dayMonth = '09/30/',
//       birthday = dayMonth + yyyy;

//     today = mm + '/' + dd + '/' + yyyy;
//     if (today > birthday) {
//       birthday = dayMonth + nextYear;
//     }

//     const countDown = new Date(birthday).getTime(),
//       x = setInterval(function () {
//         const now = new Date().getTime(),
//           distance = countDown - now;

//         (document.getElementById('days').innerText = Math.floor(
//           distance / day
//         )),
//           (document.getElementById('hours').innerText = Math.floor(
//             (distance % day) / hour
//           )),
//           (document.getElementById('minutes').innerText = Math.floor(
//             (distance % hour) / minute
//           )),
//           (document.getElementById('seconds').innerText = Math.floor(
//             (distance % minute) / second
//           ));
//       }, 0);
//   })()
// );

(function ($) {
  $(document).ready(function () {
    sal({
      once: false,
    });
  });

(function ($) {
  $(document).ready(function () {
    sal({
      once: false,
    });
  });

  $("#hamburger-menu").click(function () {
    $(this).toggleClass("active");
    $(".m-menu").toggleClass("show");
  });

  // Loader
  // $(window).on("load",function(){
  // 	$(".w-loader").fadeOut("slow");
  // });
  // TIN
	$(document).ready(function() {
		var counter = 0;
		$('.increment').click(function() {
		  if (counter < 10) {
			counter++;
			$('.counter').text(counter);
		  }
		});
		$('.decrement').click(function() {
		  if (counter > 0) {
			counter--;
			$('.counter').text(counter);
		  }
		});
	  });

	  $(document).ready(function() {
		var counter = 0;
		$('.increment1').click(function() {
		  if (counter < 10) {
			counter++;
			$('.counter1').text(counter);
		  }
		});
		$('.decrement1').click(function() {
		  if (counter > 0) {
			counter--;
			$('.counter1').text(counter);
		  }
		});
	  });

	  $(document).ready(function() {
		var counter = 0;
		$('.increment2').click(function() {
		  if (counter < 10) {
			counter++;
			$('.counter2').text(counter);
		  }
		});
		$('.decrement2').click(function() {
		  if (counter > 0) {
			counter--;
			$('.counter2').text(counter);
		  }
		});
	  });

	//   TIN
	$(".w-listProduct .listProducts .addcartBtn .btn-open").on("click", function () {
		$(this).addClass("show");
		$(".w-listProduct .listProducts .addcartBtn .cartBtn input").val(n);
	});
	$(".w-listProduct .listProducts .addcartBtn .cartBtn .btn-dash").on("click", function () {
		if (n > 1) {
			$(".w-listProduct .listProducts .addcartBtn .cartBtn input").val(--n);
		} else {
			$(this).parent().parent().removeClass("show");
		}
	});
	

	// TIN PAGE-CART:remove
	function myTest() {
    const element = document.getElementById("domTr");
    element.remove();
    }
  
    //   TIN CHECKBOX
    function showDate() {
      var x = document.getElementById("myDate");
        x.style.display = "block";
    }
    function hideDate() {
      var x = document.getElementById("myDate");
        x.style.display = "none";
    }
  
    // TIN LIST-DROP
    function showDrop() {
      var x = document.getElementById("listDrop");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
      }
})(jQuery);
	
	







  $(document).ready(function () {
    $(".w-products  .product-slider-container").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
      arrows: true,
      draggable: true,
      //   prevArrow: `<button type='button' class='slick-prev slick-arrow'><i class="fa-solid fa-chevron-left"></i></button>`,
      //   nextArrow: `<button type='button' class='slick-next slick-arrow'><i class="fa-solid fa-chevron-right"></i></button>`,
      dots: true,
      responsive: [
        {
          breakpoint: 1025,
          settings: {
            slidesToShow: 1,
            draggable: true,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            arrows: false,
            infinite: true,
            draggable: true,
            dots: false,
          },
        },
      ],
      // autoplay: true,
      // autoplaySpeed: 1000,
    });
  });
})(jQuery);
