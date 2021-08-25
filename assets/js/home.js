function getUrlParams() {
  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);

  return urlParams;
}

export function defineAction() {
  const urlParams = getUrlParams();

  let action;

  if (urlParams.has("action")) {
    action = urlParams.get("action");
  } else {
    action = null;
  }

  return action;
}

function editMode() {
  const inputs = document.querySelectorAll("input");
  const toggleActionButton =
    document.getElementsByClassName("toggleActionButton")[0];

  inputs.forEach((input) => {
    input.removeAttribute("readonly");
  });

  inputs[0].focus();

  toggleActionButton.innerHTML = "Terminar edição";
  toggleActionButton.setAttribute("href", "index.php");
  toggleActionButton.style.backgroundColor = "#5eba7d";
  toggleActionButton.style.borderColor = "#5eba7d";

  return { inputs, toggleActionButton };
}

function checkAction() {
  const action = defineAction();

  action === "edit" && editMode();
}

function putTheDayOnTheScreen() {
  moment.locale("pt-br");
  const date = moment().format("ddd, DD [de] MMMM");

  document.getElementsByClassName("day")[0].innerHTML = date;
}

(async () => {
  checkAction();
  putTheDayOnTheScreen();
})();
