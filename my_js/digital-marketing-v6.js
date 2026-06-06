document.querySelectorAll('.faq-toggle').forEach((btn) => {
    btn.addEventListener('click', () => {
      const item = btn.parentElement;
      const content = item.querySelector('.faq-content');

      // Close others
      document.querySelectorAll('.faq-item').forEach((el) => {
        if (el !== item) {
          el.querySelector('.faq-content').style.maxHeight = null;
          el.querySelector('svg').classList.remove('rotate-180');
        }
      });

      const isOpen = content.style.maxHeight;
      if (isOpen) {
        content.style.maxHeight = null;
        btn.querySelector('svg').classList.remove('rotate-180');
      } else {
        content.style.maxHeight = content.scrollHeight + "px";
        btn.querySelector('svg').classList.add('rotate-180');
      }
    });

  });


  
// WEB Banner

const comTabs = document.querySelectorAll(".com-tab");
const comContents = document.querySelectorAll(".com-tab-content");

comTabs.forEach(tab => {
  tab.addEventListener("click", () => {
    comTabs.forEach(t => t.classList.remove("active"));
    comContents.forEach(c => c.classList.remove("active"));

    tab.classList.add("active");
    document.getElementById(tab.dataset.tab).classList.add("active");
  });
});