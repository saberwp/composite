<?php get_header('blank'); ?>
<div class="bg-black text-white font-medium text-xl p-4 h-screen">
	<div class="container max-w-lg mx-auto flex flex-col justify-center h-full">

		<!-- Screen 1. -->
		<div id="screen-1" class="bg-blue-700">
			<h1 id="heading-1" class="opacity-0 font-bold text-2xl">Let's learn some GSAP!</h1>
			<h2 id="heading-2" class="opacity-0 font-bold">
				GSAP is one of the leading web animation libraries on the market today.
			</h2>
			<svg id="timeline-icon" class="opacity-0 fill-gray-300 w-16 h-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M136 248H344V143.5C312.4 139.6 288 112.6 288 80C288 44.65 316.7 16 352 16C387.3 16 416 44.65 416 80C416 112.6 391.6 139.6 360 143.5V248H611.3L538.6 181.9C535.4 178.9 535.1 173.9 538.1 170.6C541.1 167.3 546.1 167.1 549.4 170.1L637.4 250.1C639 251.6 640 253.7 640 256C640 258.3 639 260.4 637.4 261.9L549.4 341.9C546.1 344.9 541.1 344.7 538.1 341.4C535.1 338.1 535.4 333.1 538.6 330.1L611.3 264H232V368.5C263.6 372.4 288 399.4 288 432C288 467.3 259.3 496 224 496C188.7 496 160 467.3 160 432C160 399.4 184.4 372.4 216 368.5V264H8C3.582 264 0 260.4 0 256C0 251.6 3.582 248 8 248H120V143.5C88.43 139.6 64 112.6 64 80C64 44.65 92.65 16 128 16C163.3 16 192 44.65 192 80C192 112.6 167.6 139.6 136 143.5V248zM128 128C154.5 128 176 106.5 176 80C176 53.49 154.5 32 128 32C101.5 32 80 53.49 80 80C80 106.5 101.5 128 128 128zM352 32C325.5 32 304 53.49 304 80C304 106.5 325.5 128 352 128C378.5 128 400 106.5 400 80C400 53.49 378.5 32 352 32zM224 384C197.5 384 176 405.5 176 432C176 458.5 197.5 480 224 480C250.5 480 272 458.5 272 432C272 405.5 250.5 384 224 384z"/></svg>
		</div>

		<!-- Screen 2. -->
		<div id="screen-2" class="hidden">
			<h1 id="s2-h1" class="opacity-0 font-bold text-2xl">Learn gsap.to() function</h1>
			<h2 id="s2-h2" class="opacity-0 font-bold">
				The gsap.to() function is one of the most commonly used options for animation with GSAP.
			</h2>
			<p id="s2-body" class="opacity-0">
				gsap.to() is a method in the GreenSock Animation Platform (GSAP) that allows you to animate a specific element or elements to a new state. The method takes two arguments: the target element or elements, and an object with animation properties.
			</p>
			<a id="s2-docs" class="opacity-0 underline" href="https://greensock.com/docs/v3/GSAP/gsap.to()">GSAP offical docs gsap.to()</a>
		</div>

		<!-- Screen 3. -->
		<div id="screen-3" class="hidden">
			<h1 id="s3-h1" class="opacity-0 font-bold text-2xl">Learn gsap.from() function</h1>
			<h2 id="s3-h2" class="opacity-0 font-bold">
				The gsap.from() function serves the same purpose as gsap.to() but works in the opposite way.
			</h2>
			<p id="s3-body" class="opacity-0">
				gsap.from() is a method in the GreenSock Animation Platform (GSAP) that allows you to animate a specific element or elements from a state. The method takes two arguments: the target element or elements, and an object with animation properties.
			</p>
			<a id="s3-docs" class="opacity-0 underline" href="https://greensock.com/docs/v3/GSAP/gsap.from()">GSAP offical docs gsap.to()</a>
		</div>

	</div>
</div>
<?php get_footer(); ?>

<script>

var anim = {

	screen1() {

		anim.screenIndex = 0

		var tl = gsap.timeline();

		tl.fromTo("#heading-1",
			{
				x: 600,
			},
			{
				opacity: 1,
				x: 0,
				duration: 1
			}
		)

		tl.fromTo("#heading-2",
			{
				x: 600
			},
			{
				opacity: 1,
				x: 0,
				duration: 1.5
			}
		)

		tl.fromTo("#timeline-icon",
			{
				x: 600
			},
			{
				opacity: 1,
				x: 0,
				duration: 1
			}
		)

		tl.to("#screen-1", {scaleX: 0, transformOrigin: "left", duration: 0.5, delay: 0.5});

		// Hide screen.
		tl.to("#screen-1", { display: 'none', onComplete: () => { anim.screen2() } })

	},

	screen2() {

		anim.screenIndex = 1

		const tl = gsap.timeline({
			onComplete: () => {
				anim.next("#screen-2")
			}
		});

		// Show screen 2.
		tl.to('#screen-2', { display: 'block' })

		// Screen 2, heading 1
		tl.fromTo("#s2-h1",
			{
				x: 600,
			},
			{
				opacity: 1,
				x: 0,
				duration: 1
			}
		)

		// Screen 2, heading 2.
		tl.fromTo("#s2-h2",
			{
				x: 600,
			},
			{
				opacity: 1,
				x: 0,
				duration: 1
			}
		)

		// Screen 2, body text.
		tl.fromTo("#s2-body",
			{
				x: 600,
			},
			{
				opacity: 1,
				x: 0,
				duration: 1
			}
		)

		// Screen 2, body text.
		tl.fromTo("#s2-docs",
			{
				y: 600,
			},
			{
				opacity: 1,
				y: 0,
				duration: 0.5
			}
		)

	},

	next(currentScreenId) {
		const tl = gsap.timeline();
		tl.to(currentScreenId, { x: -800, duration: 1.2, delay: 2 })
		tl.to(currentScreenId, { display: 'none', onComplete: () => { anim.screens[anim.screenIndex+1].callback() } })
	},

	prev(currentScreenId) {
		const tl = gsap.timeline();
		tl.to(currentScreenId, { x: -800, duration: 1.2, delay: 2 })
		tl.to(currentScreenId, { display: 'none', onComplete: () => { anim.screens[anim.screenIndex-1].callback() } })
	},

	screen3() {

		anim.screenIndex = 2

		var tl = gsap.timeline();

		// Show screen 3.
		tl.to('#screen-3', { display: 'block' })

		// Screen 3, heading 1
		tl.fromTo("#s3-h1",
			{
				x: 600,
			},
			{
				opacity: 1,
				x: 0,
				duration: 1
			}
		)

		// Screen 3, heading 2
		tl.to("#s3-h2",
			{
				opacity: 1,
				duration: 0.65
			}
		)

		// Screen 3, body
		tl.to("#s3-body",
			{
				opacity: 1,
				duration: 0.65
			}
		)

		// Test prev().
		// @TODO needs to do reset screen position first.
		//anim.prev('#screen-3');

	},

	screenIndex: 0,

	screens: [
		{
			number: 1,
			title: 'Screen 1',
			callback: function() { anim.screen1() }
		},
		{
			number: 2,
			title: 'Screen 2',
			callback: function() { anim.screen2() }
		},
		{
			number: 3,
			title: 'Screen 3',
			callback: function() { anim.screen3() }
		}
	],

}

anim.screen1()



</script>
