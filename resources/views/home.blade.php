@extends('layout.app')

@section('content')
<section id="home-section" class="hero">
    <div class="home-slider  owl-carousel">
     <div class="slider-item ">
        <div class="overlay"></div>
       <div class="container">
        <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
            <div class="one-third js-fullheight order-md-last img" style="background-image:url(images/bg_1.png);">
             <div class="overlay"></div>
            </div>
            <div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <div class="text">
                    <span class="subheading">Hello!</span>
                  <h1 class="mb-4 mt-3">I'm <span>Rishabh Mishra</span></h1>

                  <!-- Element to contain animated typing -->
                  <span id="typing-animation"></span>

                  <script>

                  // Initialize the typing animation
                  const typingAnimationElement = document.getElementById('typing-animation');

                  // Create an array of typing text
                  const typingTexts = [
                  'Engineer  ',
                  'YouTuber  ',
                  'Teacher   ',
                  ];

                  // Create a function to display the typing animation for a given text
                  function playTypingAnimation(text) {
                  // Loop through each character and add it to the element
                  for (let i = 0; i < text.length; i++) {
                      setTimeout(() => {
                      typingAnimationElement.textContent += text[i];
                      }, i * 200); // Increase the delay to slow down the typing animation
                  }

                  // Once the animation is complete, reset the text and start over
                  setTimeout(() => {
                      typingAnimationElement.textContent = '';
                      playTypingAnimation(typingTexts[(typingTexts.indexOf(text) + 1) % typingTexts.length]);
                  }, text.length * 200);
                  }

                  // Start the typing animation loop
                  playTypingAnimation(typingTexts[0]);

                  </script>

                  <br>
                  <br>
                  <h2>A Senior Data Analyst</h2>
                  <!-- <h2 class="d-flex" style="margin-bottom: 0">With over 5 years of experience</h2> -->
                  <!-- <br> -->
                  <p><a href="https://www.youtube.com/@RishabhMishraOfficial" class="btn btn-primary py-3 px-4">YouTube</a>
                      <a href="https://github.com/rishabhnmishra" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>
@endsection
