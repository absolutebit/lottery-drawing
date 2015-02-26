# lottery-drawing
Independently verify any AbsoluteBit lottery drawing

### How it works

AbsoluteBit lottery drawing uses the Bitcoin blockchain to determine the winner of each game. Jackpot wins are also decided using the blockchain.

The block used to provide the final outcome of each game is 144 blocks in the future. The block hash is stripped of all non-numerical characters and parsed from right to left until an active player position from 0 to 9 is found, with 0 representing player position 10.

If the first 3 parsed numbers are the same, that player wins the jackpot.

### How to verify
- Insert "Block Hash" into $block_hash
- Modify $active_players to match game
- Run PHP script
- Check that "Answer Key" matches the one shown on AbsoluteBit
