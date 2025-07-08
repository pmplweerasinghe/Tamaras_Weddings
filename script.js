// Smooth Scroll for Navigation Links
document.querySelectorAll('.nav-links a').forEach(link => {
  link.addEventListener('click', function(e) {
    e.preventDefault();
    const sectionID = this.getAttribute('href');
    document.querySelector(sectionID).scrollIntoView({
      behavior: 'smooth'
    });
  });
});

// Form Validation (Basic)
document.querySelector('form').addEventListener('submit', function(e) {
  const name = this.querySelector('input[type="text"]').value.trim();
  const email = this.querySelector('input[type="email"]').value.trim();
  const message = this.querySelector('textarea').value.trim();

  if (!name || !email || !message) {
    e.preventDefault();
    alert('Please fill in all fields before submitting.');
  }
});
<script src="script.js"></script>
