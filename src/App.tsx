import React, { useState, useEffect } from 'react';

const App: React.FC = () => {
  const [inputValue, setInputValue] = useState('');
  const [options, setOptions] = useState<string[]>([]);
  const [randomOption, setRandomOption] = useState<string | null>(null);

  useEffect(() => {
    // Cargar opciones desde el almacenamiento local al montar el componente
    const storedOptions = localStorage.getItem('options');
    if (storedOptions) {
      setOptions(JSON.parse(storedOptions));
    }
  }, []);

  useEffect(() => {
    // Guardar opciones en el almacenamiento local cuando cambian
    localStorage.setItem('options', JSON.stringify(options));
  }, [options]);

  const handleAddOption = () => {
    if (inputValue.trim() !== '') {
      setOptions([...options, inputValue.trim()]);
      setInputValue('');
    }
  };

  const handlePickRandomOption = () => {
    if (options.length > 0) {
      const randomIndex = Math.floor(Math.random() * options.length);
      setRandomOption(options[randomIndex]);
    } else {
      setRandomOption(null);
      alert('Agrega al menos una opción primero.');
    }
  };

  return (
    <div>
      <h1>Selecciona una opción aleatoria</h1>
      <input
        type="text"
        placeholder="Agregar opción"
        value={inputValue}
        onChange={(e) => setInputValue(e.target.value)}
      />
      <button onClick={handleAddOption}>Agregar</button>
      <button onClick={handlePickRandomOption}>Seleccionar aleatoriamente</button>
      <div>
        <h2>Opciones:</h2>
        <ul>
          {options.map((option, index) => (
            <li key={index}>{option}</li>
          ))}
        </ul>
      </div>
      {randomOption && (
        <div>
          <h2>Opción seleccionada aleatoriamente:</h2>
          <p>{randomOption}</p>
        </div>
      )}
    </div>
  );
};

export default App;
