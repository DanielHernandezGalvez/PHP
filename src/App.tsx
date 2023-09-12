import React, { useState, useEffect } from "react";

const App: React.FC = () => {
  const [inputValue, setInputValue] = useState("");
  const [options, setOptions] = useState<string[]>([]);
  const [randomOption, setRandomOption] = useState<string | null>(null);

  useEffect(() => {
    // Cargar opciones desde el almacenamiento local al montar el componente
    const storedOptions = localStorage.getItem("options");
    if (storedOptions) {
      setOptions(JSON.parse(storedOptions));
    }
  }, []);

  useEffect(() => {
    // Guardar opciones en el almacenamiento local cuando cambian
    localStorage.setItem("options", JSON.stringify(options));
  }, [options]);

  const handleAddOption = () => {
    if (inputValue.trim() !== "") {
      setOptions([...options, inputValue.trim()]);
      setInputValue("");
    }
  };

  const handlePickRandomOption = () => {
    if (options.length > 0) {
      const randomIndex = Math.floor(Math.random() * options.length);
      setRandomOption(options[randomIndex]);
    } else {
      setRandomOption(null);
      alert("Agrega al menos una opción primero.");
    }
  };


    const recargarPestana = () => {
      window.location.reload();
    };
  

  return (
    <div className="container justify-content-center align-items-center">
      <h1 className="mt-5 text-center">Selecciona una opción aleatoria</h1>
      <div className="input-group">
      <input
        type="text"
        className="form-control my-3"
        placeholder="Agregar opciones"
        value={inputValue}
        onChange={(e) => setInputValue(e.target.value)}
      />

           <button className="btn btn-primary my-3" onClick={handleAddOption}>
          Agregar
        </button>

      </div>
      <div className="container d-flex justify-content-evenly">
   
        <button className="btn btn-primary" onClick={handlePickRandomOption}>
          Seleccionar
        </button>
        <button className="btn btn-danger" onClick={recargarPestana}>
        Reiniciar
      </button>
      </div>
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
