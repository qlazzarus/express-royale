import React from 'react';

export default (): JSX.Element => {
    const handleSubmit = (e: React.FormEvent) => {
        e.preventDefault();
    }

    return (
        <form onSubmit={handleSubmit}>
            <span>signin</span>
        </form>
    );
}