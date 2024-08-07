// ItemDetails.js
import React from 'react';
import { useParams } from 'react-router-dom';

const items = [
  { id: '1', name: 'Item 1', description: 'Description for Item 1' },
  { id: '2', name: 'Item 2', description: 'Description for Item 2' },
  { id: '3', name: 'Item 3', description: 'Description for Item 3' }
];

function ItemDetails() {
  const { id } = useParams();
  const item = items.find(item => item.id === id);

  return (
    <div>
      <h1>{item ? item.name : 'Item Not Found'}</h1>
      <p>{item ? item.description : 'No details available.'}</p>
    </div>
  );
}

export default ItemDetails;
