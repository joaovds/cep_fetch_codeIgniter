export async function getUfs() {
  const response = await fetch(
    "https://servicodados.ibge.gov.br/api/v1/localidades/estados"
  );
  const ufs = response.json();

  return ufs;
}

export async function getCitiesByUf(ufSigla) {
  if (ufSigla === "0") return;

  const response = await fetch(
    `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${ufSigla}/municipios`
  );
  const cities = response.json();

  return cities;
}
