const toggleMenu = () => {
  const navigation = document.querySelector(".__navigation");
  navigation.classList.toggle("__open");

  const hamburgerIcon = document.querySelector(".__hamburgerIcon");
  hamburgerIcon.classList.toggle("__open");
};
