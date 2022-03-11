import React, { useState } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

function FollowButton() {

    return (
        <div className="container">
            <button className="btn btn-primary mx-4">
                Follow Me
            </button>
        </div>
    );
}

export default FollowButton;

if (document.getElementById('follow-button')) {
    const btn = document.getElementById('follow-button');

    const data = document.getElementById('follow-button').getAttribute('userId');
    // const [id] = useState(data);
    btn.addEventListener('click', () => {

        axios
            .post('/follow/'+data)
            .then(response => {
                // alert(response.data);
                console.log(response);

            });
    });
    // const userId = document.getElementById('follow-button').getAttribute('userId');
    // let data={eval(appElement.dataset.questions)}
    ReactDOM.render(<FollowButton data={data}/>, document.getElementById('follow-button'));
}
