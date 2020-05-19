import React from 'react';

const Footer: React.FC = () => {
    return (
        <footer className={'p-4'}>
            <div className={'flex flex-col items-end'}>
                <a href={'http://github.com/monoless/express-royale'} target={'_blank'}>Express Royale by monoless</a>    
                <span>Special Thanks to 원본 한글화 루리아</span>
            </div>
        </footer>
    );
}

export default Footer;