import logo from './logo.svg';
import Header from './Header';
import Content from './Content';
import LoginPage from './LoginPage' ;
import './App.css';
import { BrowserRouter,Routes,Route } from 'react-router-dom';

function App() {
  return (
    <div className="App">
      <BrowserRouter>
        <Routes>
          <Route path="/" element={<LoginPage/>} />
          <Route path="/content" element={<Content/>} />
        </Routes>
      </BrowserRouter>
      {/* <Header/> */}
      
      {/* <Content/> */}
    </div>
  );
}

export default App;
