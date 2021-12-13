let token = auth.getCookie("token");

const headers = [
  ["Accept", "application/json"],
  ["Authorization", "Bearer " + token],
];

const renderGrid = (columns, data, renderTo, limit = 20, search = false) => {
  const grid = new gridjs.Grid({
    columns: columns,
    data: data,
    pagination: {
      limit: limit,
    },
    search: search,
    authoWidth: true,
    fixedHeader: true,
    height: '400px',
  }).render(renderTo);
  grid.updateConfig({
    search: search,
    data: data,
  }).forceRender();
}

export {renderGrid};
