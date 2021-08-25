import { getCitiesByUf, getUfs } from "./apiIBGE.js";

const selectUfElement = document.getElementById("uf");
const selectCityElement = document.getElementById("city");
let selectedUf;

async function insertUfOptionsInHtml() {
  const ufs = await getUfs();
  let optionHtml;

  ufs.map(
    (uf) => (optionHtml += `<option value="${uf.sigla}">${uf.nome}</option>`)
  );

  selectUfElement.innerHTML += optionHtml;
}

selectUfElement.addEventListener("change", async (event) => {
  event.preventDefault();

  selectedUf = String(
    selectUfElement.options[selectUfElement.selectedIndex].value
  );

  await insertCityOptionsInHtml(selectedUf);
});

async function insertCityOptionsInHtml(ufSigla) {
  const cities = await getCitiesByUf(ufSigla);
  let optionHtml;

  cities.map(
    (city) =>
      (optionHtml += `<option value="${city.nome}">${city.nome}</option>`)
  );

  selectCityElement.innerHTML = optionHtml;
}

(async () => {
  insertUfOptionsInHtml();
})();
