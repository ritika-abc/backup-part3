// App.js
import React from 'react';
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';
import ItemList from './ItemList';
import ItemDetails from './ItemDetails';

function App() {
  return (
    <Router>
      <Switch>
        <Route path="/" exact component={ItemList} />
        <Route path="/item/:id" component={ItemDetails} />
      </Switch>
    </Router>
  );
}

export default App;
