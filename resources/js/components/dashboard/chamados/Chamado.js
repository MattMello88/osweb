import {gridDataByForm} from '../../requests';
import {Chamado as dataChamado} from '../../../hooks';

const Chamado = (id) => {
  console.log('asf', id);

  const startSelects = async () => {
    let data

    data = await dataChamado(id);

    console.log(data);
  }

  const loadChamado = () => {
    startSelects();
  }

  window.addEventListener('load', loadChamado);
}

export default Chamado;
