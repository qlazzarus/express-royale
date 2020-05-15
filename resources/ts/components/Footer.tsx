import React from 'react';

const Footer: React.FC = () => {
    return (
        <footer>
            <hr />
            <p className={'p-2 text-right'}>
                <a href={'http://github.com/monoless/express-royale'} target={'_blank'}>Express Royale by monoless</a>
                <br />
                <span>Special Thanks to 원본 한글화 루리아</span>
            </p>
        </footer>
    );
}

export default Footer;