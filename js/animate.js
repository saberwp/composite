/* Red Ball */

const tl1 = gsap.timeline({
	repeat: 3
})
tl1.to('#head', {
	duration: 2,
  rotation: 5,
  transformOrigin: 'top left',
  ease: 'power2.out',
})
tl1.to('#head', {
	duration: 2,
  rotation: 0,
  transformOrigin: 'top left',
  ease: 'power2.out',
})
tl1.play()

/* Ball 2 */

const tl2 = gsap.timeline({
	repeat: 3
})
tl2.to('#arm-right', {
	duration: 2,
  rotation: 90,
  transformOrigin: 'top left',
  ease: 'power2.out',
})
tl2.to('#arm-right', {
	duration: 2,
  rotation: 0,
  transformOrigin: 'top left',
  ease: 'power2.out',
})
tl2.play()

/* Scale Down */
const controlScaleDown = document.getElementById('control-scale-down')
controlScaleDown.addEventListener('click', () => {

	const computedStyle = getComputedStyle(human);
	const transform = computedStyle.getPropertyValue('transform');
	const matrix = new DOMMatrix(transform);
	const scaleX = matrix.a;
	const scaleY = matrix.d;
	const averageScale = (scaleX + scaleY) / 2;

	const tl3 = gsap.timeline({
		repeat: 0
	})
	tl3.to('#human', {
		scale: averageScale*0.9,
		duration: 0.2
	})
})

/* Scale Up */
const controlScaleUp = document.getElementById('control-scale-up')
controlScaleUp.addEventListener('click', () => {

	const computedStyle = getComputedStyle(human);
	const transform = computedStyle.getPropertyValue('transform');
	const matrix = new DOMMatrix(transform);
	const scaleX = matrix.a;
	const scaleY = matrix.d;
	const averageScale = (scaleX + scaleY) / 2;

	const tl3 = gsap.timeline({
		repeat: 0
	})
	tl3.to('#human', {
		scale: averageScale * 1.1,
		duration: 0.2
	})
})

// Fetch lessons.

var Lesson = Backbone.Model.extend({
  urlRoot: '/wp-json/wp/v2/posts'
});

var Lessons = Backbone.Collection.extend({
  model: Lesson,
  url: '/wp-json/wp/v2/lesson'
});

var lessons = new Lessons();
lessons.fetch({
  data: {},
  success: function() {
		const lessonsJson = lessons.toJSON()
    console.log(lessonsJson);

		// Add to chat.
		const chat = document.getElementById('chat')
		const el = document.createElement('div')
		el.innerHTML = lessonsJson[0].title.rendered
		chat.appendChild(el)
		const el2 = document.createElement('div')
		el2.innerHTML = lessonsJson[0].content.rendered
		chat.appendChild(el2)

		// Generate lesson menu.
		const controls = document.getElementById('controls')
		const el4 = document.createElement('ul')
		lessonsJson.forEach((lesson) => {
			const el = document.createElement('li')
			el.innerHTML = lesson.title.rendered
			el4.appendChild(el)
		})
		controls.appendChild(el4)

  },
  error: function() {
    console.log('Error fetching lessons.');
  }
});
