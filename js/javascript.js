		var quote_count;
		$('body').find('.tab').hide();
		var activeItem = $($('.tab-nav .active > a').attr('href'));
		activeItem.show();

		$('.tab-nav a').click(function(){
			if(!$(this).parent().hasClass('active')){
				$(this).parent().addClass('active').siblings('li').removeClass('active');
				activeItem = $($(this).attr('href'));
				activeItem.fadeIn(150).siblings('.tab').hide();
			}
			return false;
		});

		$("#regbtn.btn-default").on("click", function() {
			$(".logform").fadeOut("slow");
			$(".regform").fadeIn("slow");
		})

		

		$(".heart").on("click touchstart", function(){
	      $(this).toggleClass("animating");
		});


		$(".heart").on('animationend', function(){
		  $(this).toggleClass('animating');
		});

		$( document ).ready(function() {
		 quote_count = 4;
		 showmore();
		});

		function showmore() {
			$$a({
					type:'post',
					url:'more.php',
					data:{
					'quotes':quote_count
					},
					response:'text',
					success:function (data) {
						$('.quotes').html(data);
						quote_count+=5;
					}
				});
		}
		function changelikes(val){
			if(document.getElementById(val).classList.contains("forlikes")) {
				var spanq = document.getElementById(val).getElementsByTagName("span");
				$$a({
					type:'post',
					url:'likes.php',
					data:{
					'likecount':spanq[0].innerHTML,
					'idshnik':val
					},
					response:'text',
					success:function (data) {
						$$(spanq[0], data);
					}
				});
				document.getElementById(val).className = "";
			}

		}				
