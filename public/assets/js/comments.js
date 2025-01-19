
document.querySelectorAll('.profile_picture_container img').forEach(profile_image => {

    profile_image.addEventListener('mouseover', () => {
      if (!profile_image.classList.contains('flipping')) {
        profile_image.classList.add('flipping');
  
        // Animasyon bittiğinde sınıfı kaldır
        profile_image.addEventListener('animationend', () => {
          profile_image.classList.remove('flipping');
        }, { once: true }); // Sadece bir kez çalışsın
      }
    });

});