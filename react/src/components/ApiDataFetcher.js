// src/App.js
import React, { useEffect } from 'react';
import ApiDataFetcher from './components/ApiDataFetcher'; // Sesuaikan dengan lokasi sesungguhnya

function App() {
  useEffect(() => {
    // Panggil fungsi fetchData dari komponen ApiDataFetcher
    ApiDataFetcher.fetchData();
  }, []);

  return (
    <div className="App">
      {/* Isi konten aplikasi Anda di sini */}
    </div>
  );
}

export default App;
